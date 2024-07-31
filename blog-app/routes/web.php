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

// routes/web.php
use App\Http\Controllers\PostController;

Route::prefix('posts')->group(function() {
    Route::get('/', [PostController::class, 'index'])->name('posts.index');
    Route::get('/create', [PostController::class, 'create']);
    Route::post('/', [PostController::class, 'store']);
    Route::get('/{id}', [PostController::class, 'show']);
    Route::get('/{id}/edit', [PostController::class, 'edit']);
    Route::put('/{id}', [PostController::class, 'update']);
    Route::delete('/{id}', [PostController::class, 'destroy']);
});

