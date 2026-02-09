<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function Login()
    {
        return view('auth.login');
    }

    public function signup(){
        return view('auth.signup');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function checkSignUp(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        $repass   = $request->repass;
        $mssv     = $request->mssv;
        $lop      = $request->lopmonhoc;
        $gioitinh = $request->gioitinh;

        // Thông tin sinh viên mẫu (theo đề)
        if (
            $username === 'nghianq' &&
            $password === '123456' &&
            $repass   === '123456' &&
            $mssv     === '0093667' &&
            $lop      === '67pm1' &&
            $gioitinh === 'nam'
        ) {
            return redirect('/login');
        }

        return "Đăng ký thất bại";
    }

    public function checkLogin(Request $request){
        $account = $request->only('email', 'password');
        if(Auth::attempt($account)){
            return redirect('/admin');
        };
    }
}
