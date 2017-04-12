<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Product;
use App\Http\Requests;

class CartController extends Controller
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
        $cart = Cart::instance('shopping')->content();
        return view('cart', array('cart' => $cart, 'title' => 'Welcome', 'description' => '', 'page' => 'home'));
    }

    public function store(Request $request) //adds to a cart
    {
        $product = new Product($request->all());
        Cart::instance('shopping')->add($product->description, $product->name, $product->quantity, $product->price);
        return $product;
    }
}
