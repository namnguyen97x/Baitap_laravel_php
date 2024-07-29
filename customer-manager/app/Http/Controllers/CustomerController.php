<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        // Truy xuất danh sách khách hàng từ session, hoặc khởi tạo mảng rỗng nếu không có
        $customers = session('customers', []);
        // Truyền dữ liệu khách hàng vào view
        return view('customers.index', compact('customers'));
    }
    
    public function store(Request $request) {
        // Truy xuất dữ liệu từ request
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        
        // Truy xuất danh sách khách hàng hiện có từ session hoặc khởi tạo mảng rỗng
        $customers = session('customers', []);
        
        // Thêm khách hàng mới vào mảng
        $customers[] = [
            'name' => $name,
            'email' => $email,
            'phone' => $phone
        ];
        
        // Lưu trữ mảng khách hàng đã được cập nhật vào session
        session(['customers' => $customers]);
        
        // Chuyển hướng đến view index
        return redirect()->route('customers.index');
    }
}