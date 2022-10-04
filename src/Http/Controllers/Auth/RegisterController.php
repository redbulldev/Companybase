<?php

declare(strict_types=1);

namespace Companybase\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Companybase\Http\Requests\AddUserRequest;
use Companybase\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Hash;
use Log;
use Exception;

class RegisterController extends Controller
{
    public function getRegister(){
		return view('companybase::auth.register');
    }

    public function postRegister(AddUserRequest $request){
		try {
			Admin::create([
				'name'     => $request->name,
				'email'    => $request->email,
				'password' => Hash::make($request->password)
			]);

            if(Auth::check()){
                Auth::logout();

                Session::flush();
            }

			return redirect()->route('login')->with('message','Thêm tài khoản thành công');
		} catch (Exception $exception) {
			Log::error('error(loi):'.$exception->getMessage().$exception->getLine());
		}
    }

}
