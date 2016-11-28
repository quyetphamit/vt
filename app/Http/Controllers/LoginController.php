<?php

namespace App\Http\Controllers;


use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function getLogin()
    {
        if (!Auth::check()) {
            return view('admin.module.login.login');
        } else {
            return redirect('admin');
        }
    }

    public function postLogin(LoginRequest $request)
    {
        session()->flush();
        $login1 = [
            'username' => $request->input('txtUsername'),
            'password' => $request->input('txtPassword'),
            'level' => 0,
        ];
        $login2 = [
            'username' => $request->input('txtUsername'),
            'password' => $request->input('txtPassword'),
            'level' => 1,
        ];
        if (Auth::attempt($login1) || Auth::attempt($login2)) {
            return redirect('admin');

        } else {
            $errors = "Tên đăng nhập hoặc mật khẩu sai!";
            return redirect('login')->withErrors($errors);
        }

    }

    /**
     * @return string
     */
    public function getLogout()
    {
        session()->flush();
        Auth::logout();
        return redirect()->route('getLogin');
    }
}
