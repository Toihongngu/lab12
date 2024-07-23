<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::limit(12)->get();

       return view('client.index',compact('products'));
    }

    public function detail($id)
    {
        $product = Product::where('id', $id)->first();
       return view('client.menu_details',compact('product'));
    }

    public function menu()
    {
        $products = Product::paginate(12);
       return view('client.menu',compact('products'));
    }
}
