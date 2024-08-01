<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function showFormRegister(){
        return view('register');
    }
    // Áp dụng sự phụ thuộc của RegisterRequest cho method register trong controller
      public function register(RegisterRequest $request)
    {
         echo "Register account successfully";
    }
}
