<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Product;
use Session;

use App\Http\Request as HttpRequest;

class ShoppingcartController extends Controller
{
	public function index(){
		return view('shoppingcart/shoppingCart');
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
        if (!Session::has('cart')) {
            return view('shop.shoppingCart');
        }        

        $quantity = $request->input('quantity');
        $oldCart = Session::has('cart') ? Session::get('cart') : null; //null nog nodig hier?
        $cart = new Cart($oldCart);
        $product = Product::find($id);
        
                foreach ($cart->items as $item){
                    if ($item['item']['id'] == $id){
                        $item['quantity'] = $quantity;                    
                        $cart->updateItem($product, $id, $quantity);
                    }
                }



        if (empty($cart->items)){
            $request->session()->pull('cart', $cart);
        } else {
            $request->session()->put('cart', $cart);
        }

        return redirect()->route('shoppingcart.shoppingCart');
    }

    public function deleteFromCart(Request $request, $id){
        if (!Session::has('cart')) {
            return view('shop.shoppingCart');
        }  
        $oldCart = Session::has('cart') ? Session::get('cart') : null; //null nog nodig hier?
        $cart = new Cart($oldCart); 
        $product = Product::find($id);

        foreach($cart->items as $item){
            if ($item['id'] == $id){               
                $cart->deleteItem($item, $id);         
            }
        }
        if (empty($cart->items)){
            $request->session()->put('cart', $cart);
        } else {
            $request->session()->put('cart', $cart);
        }
        
        return redirect()->route('shoppingcart.shoppingCart');         
    }

}
