<?php

declare (strict_types = 1);

namespace Companybase\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Companybase\Models\Admin;
use Companybase\Rules\MatchOldPassword;
use Companybase\Traits\StorageImageTrait;
use DB;
use Exception;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Log;
use Storage;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    use StorageImageTrait;

    public function index(Request $request)
    {
        return view('companybase::admin.home');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        Session::flush();

        return redirect()->route('login')->with('success', 'Logout Success!');
    }

    public function profile()
    {
        $profile = Auth::user();

        return view('companybase::admin.profile.index')->with('profile', $profile);
    }

    public function profileUpdate(Request $request, $id)
    {
        $user = Admin::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'name' => ['required', 'unique:admins,name,'.$id.',id'],
            'email' => ['required', Rule::unique('admins')->ignore($user->id)]
        ]);

        if ($validator->fails()) {
             return redirect()->back()->with('error', 'Không thành công, Vui lòng thử lại!');
        } else {
            $user->fill($validator->validated())->save(); //or

            return redirect()->back()->with('success', 'Cập nhật thành công hồ sơ cá nhân');
        }
    }


    public function uploadToStorage($request)
    {
        $file = $this->uploadAvatar($request->avatar, '/public/avatar');

        return Storage::url($file);
    }

    public function hasAvatar($checkAvatar, $request)
    {
        Storage::delete(Str::replaceFirst("storage", "public", $checkAvatar->value));

        $url = $this->uploadToStorage($request);

        $status = DB::table('admin_values')->where('admin_id', Auth::user()->id)->update([
            'value' => $url
        ]);

        if (!empty($status)) {
            return redirect()->back()->with('message', 'Cập nhật thành công hình ảnh đại diện thành công');
        }
    }

    public function notAvatar($request)
    {
        $check = DB::table('admin_fields')->where('field_name', 'avatar')->first();

        if(!empty($check)){
            $url = $this->uploadToStorage($request);

            $status = DB::table('admin_values')->insert([
                'admin_id' => Auth::user()->id,
                'field_id' => $check->id,
                'value' => $url,
            ]);

            if (!empty($status)) {
                return redirect()->back()->with('success', 'Thêm thành công hình ảnh đại diện của bạn');
            }
        }

        DB::table('admin_fields')->insert(['field_name' => 'avatar']);

        $field = DB::table('admin_fields')->where('field_name', 'avatar')->first();

        $url = $this->uploadToStorage($request);

        $status = DB::table('admin_values')->insert([
            'admin_id' => Auth::user()->id,
            'field_id' => $field->id,
            'value' => $url,
        ]);

        if (!empty($status)) {
            return redirect()->back()->with('success', 'Thêm thành công hình ảnh đại diện của bạn');
        }
    }

    public function updateAvatar(Request $request, $id)
    {
        if ($request->file('avatar')) {
            try {
                $request->validate([
                    'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);

                $checkAvatar = Auth::user()->avatar;

                if (!empty($checkAvatar->value)) {
                    return $this->hasAvatar($checkAvatar, $request);
                } else {
                    return $this->notAvatar($request);
                }

                return redirect()->back()->with('error', 'Cập nhật thành công hình ảnh đại diện không thành công');
            } catch (\Exception $e) {
                Log::error('error(loi):' . $e->getMessage() . $e->getLine());
            }
        }

        return redirect()->back()->with('success', 'Đã cập nhật thành công hình ảnh đại diện của bạn');
    }

    public function changePassword()
    {
        return view('companybase::admin.profile.update_password_user');
    }

    public function changPasswordStore(Request $request)
    {
        $request->validate([
            'old_password'          => ['required', new MatchOldPassword],
            'new_password'          => ['required'],
            'password_confirmation' => ['same:new_password'],
        ]);

        Admin::find(Auth::user()->id)->update(['password' => Hash::make($request->new_password)]);

        return redirect()->route('admin.home')->with('success', 'Mật khẩu đã được thay đổi thành công');
    }
}
