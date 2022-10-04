<?php

declare(strict_types=1);

namespace Companybase\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Companybase\Models\Setting;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use Companybase\Http\Requests\SettingRequest;
use Log;
use Exception;
use Config;

class SettingController extends Controller
{
    protected $setting;

    public function __construct(Setting $setting)
    {
        $this->setting = $setting;
    }

    public function create()
    {
        return view('companybase::admin.setting.add');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:2|max:50',
            'value' => 'required|min:3|max:100',
        ]);

        try {
            $this->setting->create($data);

            return redirect()->back()->withInput($request->input())->with('message','Thêm thành công');
        } catch (Exception $exception) {
            Log::error('error(loi):'.$exception->getMessage().$exception->getLine());
        }
    }

    public function getSetting()
    {
        $settings = Cache::rememberForever('settings', function () {
            return Setting::all();
        });

        $keyed = $settings->keyBy('name')->mapWithKeys(function ($item) {
            return [$item['name'] => $item['value']];
        });

        return view('companybase::admin.setting.index')->with('settings', $keyed->all());
    }

    public function updateSetting(Request $request)
    {
        Cache::forget('settings');

        foreach ($request->all() as $key => $value) {
            DB::table('settings')
                ->where('name', $key)
                ->update(['value' => $value]);
        }

        return redirect()->back()->with('message','Sửa thành công');
    }
}
