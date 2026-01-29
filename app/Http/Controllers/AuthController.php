<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signUp()
    {
        return view('auth.signup');
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
}
