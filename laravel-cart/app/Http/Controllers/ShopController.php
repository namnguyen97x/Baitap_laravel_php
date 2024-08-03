<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Cart;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('home', compact('products'));
    }

    public function addToCart($idProduct)
    {
        $product = Product::findOrFail($idProduct);
        $oldCart = session('cart');

        $newCart = new Cart($oldCart);
        $newCart->add($product);
        session()->put('cart', $newCart);
        session()->flash('add-to-cart-success', 'Thêm sản phẩm vào giỏ hàng thành công');
        return back();
    }
}
