<?php

declare(strict_types=1);

namespace Companybase\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function getLogin()
    {
        return view('companybase::auth.login');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request,
            [
                'email' => 'required|email',
                'password' => 'required',
            ]
        );

        $arr = ['email' => $request->email, 'password' => $request->password];

        $remember = false;

        if ($request->remember) {
            $remember = true;
        }

        if (Auth::attempt($arr, $remember)) {
            return redirect()->route('admin.home');
        }

        return back()->withInput()->with('error', 'Tài khoản hoặc mật khẩu không đúng');
    }

}
