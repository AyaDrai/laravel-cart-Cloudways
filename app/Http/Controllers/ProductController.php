<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $product=Product::all();
        return view ('shop.index',compact('product'));
    }

    public function show($id)
    {
        $product=Product::FindOrFail($id);
        // dd($product);
        return view('shop.show',compact('product'));
    }
}
