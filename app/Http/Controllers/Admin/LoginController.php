<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function getLogin()
    {
        return view('admin.module.login');
    }

    public function postLogin(LoginRequest $request)
    {
        $login = [
            'username' => $request->input('txtUsername'),
            'password' => $request->input('txtPassword'),
            'level' => 0 or 1
        ];
        if (Auth::attempt($login)) {
            return redirect('admin');

        } else {
            $errors = "Tên đăng nhập hoặc mật khẩu sai!";
            //return redirect()->back()->withErrors($errors);
            return redirect('login')->withErrors($errors);
        }

    }
}
