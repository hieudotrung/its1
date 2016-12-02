<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Auth;
use Session;

class LoginController extends Controller
{
    public function login()
    {
        if (!Auth::check()) {
            return view('login');
        } else {
            return redirect()->route('user.index');
        }
    }

    public function postLogin(LoginRequest $request)
    {
        $login = [
            'username' => $request->txtUser,
            'password' => $request->txtPass,
            'is_admin' => 1
        ];
        if (Auth::attempt($login)) {
            return redirect()->route('user.index');
        } else {
            return redirect()->back();
        }
    }

    public function logout()
    {
        Auth::logout();
        Session:flush();
        return redirect()->route('backend.login');
    }
}
