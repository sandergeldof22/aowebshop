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
        $quantity = $request->input('quantity');

        if($quantity == null){
            $quantity = '1';
        }

    	$oldCart = Session::has('cart') ? Session::get('cart') : null;
    	$cart = new Cart($oldCart);
    	$cart->add($product, $product->id, $quantity);

        return redirect('/shop');
    }

    public function addAndGetShoppingCart(Request $request, $id){
        $product = Product::find($id);
        $quantity = '1';        
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id, $quantity);

        return view('shop.shoppingCart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

}
