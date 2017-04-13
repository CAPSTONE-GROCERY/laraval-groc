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
        if(isset($_GET['store']))
            $currentStoreName = $_GET['store'];
        else
            $currentStoreName = 'cart';

        $cart = Cart::instance(\Auth::user()->email . "'s" . $currentStoreName)->content();
        return view('carts.index', array('cart' => $cart, 'title' => 'Welcome', 'description' => '', 'page' => 'home'));
    }

    public function store(Request $request) //adds to a cart
    {
        $product = new Product($request->all());
        Cart::instance(\Auth::user()->email . "'s" . $request->store)->add($product->description, $product->name, $product->quantity, $product->price);
        return redirect()->back();
    }

    public function remove($item_id)
    {
        if(isset($_GET['store']))
            $currentStoreName = $_GET['store'];
        else
            $currentStoreName = 'cart';

        Cart::instance(\Auth::user()->email . "'s" . $currentStoreName)->remove($item_id);
        return back();
    }
}
