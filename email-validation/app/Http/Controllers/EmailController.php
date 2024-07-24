<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    function index(Request $request){
        $email = $request->input('email');
        //check valid email format
        if(isset($email)){
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                $message = "Email hợp lệ";
            }
            else {
                $message = "Email không hợp lệ";
            }
        } else {
            $message = "Vui lòng nhập email";
        }
        return view('index', compact('message'));
    }
}