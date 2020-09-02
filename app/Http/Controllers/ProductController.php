<?php

namespace App\Http\Controllers;

use App\Product;
use App\Cart;
use Illuminate\Http\Request;

use App\Http\Request as HttpRequest;
use Session;



class ProductController extends Controller
{
    public function index(){
    	return Product::get();
    }

    public function addToCart(Request $request, $id) {
    	$product = Product::find($id);
    	$oldCart = Session::has('cart') ? Session::get('cart') : null;
    	$cart = new Cart($oldCart);
    	$cart->add($product, $product->id);

        dd($cart->items);

    	$request->session()->put('cart', $cart);
    	return redirect()->route('shop.index');

    }

    public function getShoppingCart() {
    	if (!Session::has('cart')) {
    		return view('shop.shoppingCart');
    	}
    	$oldCart = Session::get('cart');
    	$cart = new Cart($oldCart);
    	return view('shop.shoppingCart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function updateCart(Request $request, $id) {
        echo 'hallo !';
        $hoeveelheid = $request->input('updateCart');
        $cart = Session::get('cart');
        dd($hoeveelheid);

            if (Session::has('cart')) {
                foreach ($cart->items as $item){
                    if ($item['item']['id'] == $id){
                        $item['quantity'] = $hoeveelheid;
                        break;
                    }
                }
                Session::put('cart', $cart);
                Session::save();                
            }
            // return redirect()->route('shop.shoppingCart');
        return view('shop.shoppingCart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }
}
