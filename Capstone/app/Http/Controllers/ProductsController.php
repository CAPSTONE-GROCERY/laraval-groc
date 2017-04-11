<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests;

class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }
}
