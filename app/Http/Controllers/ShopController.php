<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Order;
use App\Order_detail;
use App\Customer;
use App\Cart;
use App\Category;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Http\Request as HttpRequest;

class ShopController extends Controller
{
	/*
	*Functie haalt alle gegevens op uit de DB Categorie en eventueel ingevoerde categorien uit een checkbox.
	*Hierna bekijkt hij is de filter niet gebruikt, leeg is(standaard) of er categorien gekozen zijn.
	*Gebasseerd op de categorie(n) haalt hij producten op die hetzelfde categorie_id hebben als de categorie en geeft deze mee in de view.
	*/
	public function index(Request $request){

		$categories = Category::all();
		$categorieFilter = $request->input('categories');

		if(empty($categorieFilter)){
			$filteredProducts = Product::all();
		}else{
			$filteredProducts = Product::WhereIn('categorie_id', $categorieFilter)->get();
		}

		return view('shop.index', [
			'product' => $filteredProducts,
			'categories' => $categories
		]);	
	}

	/*
	*Deze functie opent een details pagina voor een specifiek product gebasseerd op het ID.
	*Deze haalt alle gegevens op van dit specifieke product en de categorien.
	*Deze gegevens geeft hij mee aan de view die alle gegevens van het product weergeven.
	*/
	public function details($id){

		$product = Product::findOrFail($id);
		$categories = Category::all();

    	return view('shop.show', [
    		'product' => $product,
    		'categories' => $categories
    	]);
	}

	/*
	*geeft de view van de checkout weer (duh)
	*/
	public function toCheckOut() {
        return view('shop.checkOut');
    }


	/*
	*Deze functie slaat een Order op, dit doet hij door de ingevulde gegevens van de checkout op te slaan in de Customers DB.
	*Hij slaat het Customer_ID, samen met naam en prijs op in de Order.
	*en per product slaat hij de gegevens op in de Order_details met eenzelfde Order_id als de ID in Order dat aangemaakt wordt.
	*Als dit alles is opgeslagen flusht hij de session en wordt deze geleegd.
	*Hierna redirect hij terug naar de home page.
	*/
    public function saveOrder(request $request) {

    	if (!Session::has('cart')) {
            return view('shop.shoppingCart')->with('message', 'Error, geen shoppingcart gevonden !');
        }      	

        $cart = Session::get('cart');

    	$customer = new Customer();
    	$customer->first_name = request('first_name');
    	$customer->last_name = request('last_name');
    	$customer->adress = request('adress');
    	$customer->postal_code = request('postal_code');
    	$customer->age = request('age');
    	$customer->emailadress = request('emailadress');
    	$customer->telephone_number = request('telephone_number');
    	$customer->save();
        
		$order = new Order();
    	$first_name = $customer->first_name;
    	$last_name = $customer->last_name;
    	$name = $first_name . ' ' . $last_name;		

		$order->customer_id = $customer->id;
		$order->total_price = $cart->totalPrice;
		$order->customer_name = $name;			
		if(Auth::check() == true) {
			//indien een klant is ingelogd, geef dan ook zijn user_id mee.
			$order->user_id = auth()->user()->id;
		}
		$order->save();

        foreach($cart->items as $item) {
        	$infoId = $item['id'];
        	$infoQuantity = $item['quantity'];
        	$infoPrice = $item['price'];
        	$Order_Id = $order->id;

			$order_details = new Order_detail();        	
			$order_details->product_id = $infoId;
			$order_details->quantity = $infoQuantity;
			$order_details->price = $infoPrice;
			$order_details->order_id = $Order_Id;
    		$order_details->save();
        };

        //session->flush() leeft de shopping cart terwijl een ingelogd persoon ingelogd blijft.
        session()->flush();

    	return redirect('/orders');
    }

}
