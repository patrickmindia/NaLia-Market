<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function show($name)
    {
        return view('product', ['article' => Product::where('name', $name)->firstOrFail()]);
    }
}
