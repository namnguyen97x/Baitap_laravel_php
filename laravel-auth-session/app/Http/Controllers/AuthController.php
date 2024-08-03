<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
   function showFormLogin(Request $request){
    $email = $request->cookie('email');
    return view('login', compact('email'));
}


    function login(Request $request) {
    $email = $request->email;
    $password = $request->password;
    if($email == 'admin@gmail.com' && $password == '1234'){
        // Lưu email người dùng vào session
        session()->put('userEmail', $email);
        // Tạo cookie lưu email
        $cookie = cookie('email', $email, 60); // Thời gian hết hạn là 60 phút
        return redirect()->route('home')->cookie($cookie);
    } else {
        // Sử dụng session flash để hiển thị lỗi
        session()->flash('error', 'Account not exist');
        return redirect()->route('auth.showFormLogin');
    }
}


    function logout(){
        // xóa tất cả các session
        session()->flush();
        return redirect()->route('auth.showFormLogin');
    }
}
