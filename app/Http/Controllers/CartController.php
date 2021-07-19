<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{

    public function store(Request $request)
    {
        Cart::add($request->id, $request->name, 1, $request->price)
            ->associate(Product::class);

        return back();
    }


    public function show()
    {
        return view('cart.index');
    }

    public function empty()
    {
        Cart::destroy();
    }
}
