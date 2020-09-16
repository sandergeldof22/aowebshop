<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Orders;
use App\Order_details;
use App\Klanten;
use App\Cart;
use App\Product_Categories;
use Illuminate\Support\Facades\Auth;
use Session;

class ShopController extends Controller
{

	public function index(){

		$products = Product::all();

		return view('shop.index', [
			'product' => $products,
		]);
	}

	public function details($id){

		$product = Product::findOrFail($id);

    	return view('shop.show', ['product' => $product]);
	}

	public function filter(Request $request){

		$categorieFilter = $request->input('categories');

		if(empty($categorieFilter)){
			$filteredProducts = Product::all();
		}else{
			$filteredProducts = Product::WhereIn('categorie_id', $categorieFilter)->get();
		}

		return view('shop.index', [
			'product' => $filteredProducts,
		]);
		
	}

	public function toCheckOut() {
        return view('shop.checkOut');
    }

    public function saveOrder() {

    	$klant = new Klanten();

    	$klant->voornaam = request('voornaam');
    	$klant->achternaam = request('achternaam');
    	$klant->adress = request('adress');
    	$klant->postcode = request('postcode');
    	$klant->leeftijd = request('leeftijd');
    	$klant->emailadress = request('emailadress');
    	$klant->telefoonnummer = request('telefoonnummer');

    	$klant->save();

    	if (!Session::has('cart')) {
            return view('shop.shoppingCart');
        }  

        $cart = Session::has('cart') ? Session::get('cart') : null;
        
		$order_details = new Order_details();
		$order = new Orders();

    	$voornaam = $klant->voornaam;
    	$achternaam = $klant->achternaam;
    	$naam = $voornaam . ' ' . $achternaam;		

		if(Auth::check() == false) {
			$order->klanten_id = $klant->id;
			$order->totale_prijs = $cart->totalPrice;
			$order->klanten_naam = $naam;			
			$order->save();
		}else{
			$order->totale_prijs = $cart->totalPrice;
			$users = auth()->user()->id;
			$order->user_id = $users;
			$order->klanten_id = $klant->id;
			$order->klanten_naam = $naam;			
			$order->save();
		}

        foreach($cart->items as $item) {
        	$infoId = $item['id'];
        	$infoQuantity = $item['quantity'];
        	$infoPrice = $item['price'];
        	$Order_Id = $order->id;

			$order_details = new Order_details();        	
			$order_details->product_id = $infoId;
			$order_details->quantiteit = $infoQuantity;
			$order_details->prijs = $infoPrice;
			$order_details->order_id = $Order_Id;

    		$order_details->save();
        };

    	return redirect('/');
    }

}
