<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signIn()
    {
        return view('signin');
    }

    public function checkSignIn(Request $request)
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
            $lop      === '67PM1' &&
            $gioitinh === 'nam'
        ) {
            return "Đăng ký thành công!";
        }

        return "Đăng ký thất bại";
    }
}
