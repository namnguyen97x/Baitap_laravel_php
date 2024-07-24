<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    echo "Đây là trang chủ!";
});
Route::get('/about', function () {
    echo "Đây là trang giới thiệu!";
});
Route::get('/contact', function () {
    echo "Đây là trang liên hệ!";
});
// tạo nhóm route 'user'
Route::group(['prefix' => 'user'], function () {
    Route::get('{age}', function($age = 0){
        return "Your age is ". $age;
    })->where('age', '[0-9]+');
    
    Route::get('{name?}', function ($user = 'Guest') {
        return "Xin chào ". $user;
    })->where('name', '[a-zA-Z]+');
});
// route cho nhiều method
Route::match(['get', 'post'], '/', function () {
    return 'Hello World';
});
// route cho nhiều parameter
Route::get('user/profile', function () {

})->name('profile');


