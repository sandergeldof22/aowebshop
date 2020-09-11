<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Orders;
use App\Klanten;
use App\Product_Categories;
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
			$filteredProducts = Product::Where('categorie_id', $categorieFilter)->get();
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

    	return redirect('/');
    	// return view('order.orders');
    }

}
