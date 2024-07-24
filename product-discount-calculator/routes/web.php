<?php

use Illuminate\Support\Facades\Route;

Route::get('/caculator', function () {
    return view('caculator');
});

Route::post('/caculator', function () {
    $listPrice = floatval(request()->ListPrice);
    $discountPercent = floatval(request()->DiscountPercent);
    $discountAmount = $listPrice * $discountPercent * 0.01;
    $discountedPrice = $listPrice - $discountAmount;
    $productDescription = request()->ProductDescription;
    return view('display-discount', compact('productDescription', 'listPrice', 'discountAmount', 'discountPercent', 'discountedPrice'));
});