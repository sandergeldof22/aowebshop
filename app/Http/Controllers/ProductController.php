<?php

namespace App\Http\Controllers;

use App\Product;
use App\Cart;
use Illuminate\Http\Request;
use App\Http\Request as HttpRequest;
use Session;

class ProductController extends Controller
{  
 /*
 *Functie haalt informatie van het product en het opgegeven quantiteit of 1 als er niks opgegeven is.
 *Functie creert een cart class en laat deze de add functie uitvoeren met bijbehorende gegevens.. 
 */
    public function addToCart(Request $request, $id) {

    	$product = Product::find($id);
        $quantity = $request->input('quantity');
        if($quantity == null){
            $quantity = '1';
        }
    	$cart = new Cart();

    	$cart->add($product, $product->id, $quantity);
        return redirect('/shop');
    }

/*
*Functie haalt informatie van het product op gebasseerd op zijn ID.
*Deze voegt hij toe met een quantiteit van 1.
*Er wordt een nieuwe instance van een shoppingcart gemaakt en deze voert de add functie uit met bijbehorende gegevens.
*/
    public function addAndGetShoppingCart(Request $request, $id){
        $product = Product::find($id);
        $quantity = '1';       
        $cart = new Cart();
        $cart->add($product, $product->id, $quantity);

        return view('shop.shoppingCart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }
}
