<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Product;
use Session;

use App\Http\Request as HttpRequest;

class ShoppingcartController extends Controller
{
    /* 
    * Functie haalt de shoppingcart op en geeft deze mee aan de view
    */
    public function getShoppingCart() {
    	if (!Session::has('cart')) {
    		return view('shop.shoppingCart')->with('message', 'Error, geen shoppingcart gevonden !');
    	}

    	$cart = new Cart();

    	return view('shop.shoppingCart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);

    }
    /* 
    * Functie ziet het ingevoerde nieuwe kwantiteit, haalt de cart op.
    * loopt door de items heen tot hij het item gevonden heeft die hij zoekt en update het item naar de nieuwe kwantiteit
    *
    */
    public function updateCart(Request $request, $id) {
        if (!Session::has('cart')) {
            return view('shop.shoppingCart')->with('message', 'Error, geen shoppingcart gevonden !');
        }        

        $quantity = $request->input('quantity');
        $cart = new Cart();
        $product = Product::find($id);

        $cart->update($product, $id, $quantity);

        return redirect()->route('shoppingcart.shoppingCart');
    }
    /* 
    * Functie zoekt een product in de cart gebasseerd op het ID en voert dan de deleteItem functie uit, die hem verwijdert uit de cart 
    */
    public function deleteFromCart(Request $request, $id){
        if (!Session::has('cart')) {
            return view('shop.shoppingCart')->with('message', 'Error, geen shoppingcart gevonden !');
        }  
        $cart = new Cart();
        $product = Product::find($id);
            
        $cart->delete($product, $id);         

        return redirect()->route('shoppingcart.shoppingCart');         
    }

}
