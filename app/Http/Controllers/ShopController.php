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

    public function saveOrder(request $request) {

    	$customer = new Customers();

    	$customer->voornaam = request('first_name');
    	$customer->achternaam = request('last_name');
    	$customer->adress = request('adress');
    	$customer->postcode = request('postal_code');
    	$customer->leeftijd = request('age');
    	$customer->emailadress = request('emailadress');
    	$customer->telefoonnummer = request('telephone_number');

    	$customer->save();

    	if (!Session::has('cart')) {
            return view('shop.shoppingCart');
        }  

        $cart = Session::has('cart') ? Session::get('cart') : null;
        
		$order_details = new Order_details();
		$order = new Orders();

    	$first_name = $customer->first_name;
    	$last_name = $customer->last_name;
    	$naam = $first_name . ' ' . $last_name;		

		if(Auth::check() == false) {
			$order->customer_id = $customer->id;
			$order->total_price = $cart->totalPrice;
			$order->customer_name = $name;			
			$order->save();
		}else{
			$order->total_price = $cart->totalPrice;
			$users = auth()->user()->id;
			$order->user_id = $users;
			$order->customer_id = $customer->id;
			$order->customer_name = $name;			
			$order->save();
		}

        foreach($cart->items as $item) {
        	$infoId = $item['id'];
        	$infoQuantity = $item['quantity'];
        	$infoPrice = $item['price'];
        	$Order_Id = $order->id;

			$order_details = new Order_details();        	
			$order_details->product_id = $infoId;
			$order_details->quantity = $infoQuantity;
			$order_details->price = $infoPrice;
			$order_details->order_id = $Order_Id;

    		$order_details->save();
        };

        $request->session()->pull('cart', $cart);

    	return redirect('/');
    }

}
