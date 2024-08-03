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
Route::prefix('Customers')->group(function(){
    Route::get('/', [\App\Http\Controllers\CustomerController::class, 'index']);
    Route::get('/{id}', [\App\Http\Controllers\CustomerController::class, 'detail']);
    Route::post('/', [\App\Http\Controllers\CustomerController::class, 'store']);
    Route::put('/{id}', [\App\Http\Controllers\CustomerController::class, 'update']);
    Route::delete('/{id}', [\App\Http\Controllers\CustomerController::class, 'destroy']);


});

