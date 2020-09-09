<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

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
			$products = Product::all();
		}else{
			$products = Product::whereIn('categorie', $categorieFilter)
		->get();	
		}

		return view('shop.index', [
			'product' => $products,
		]);
		
	}

	public function toCheckOut() {
        return view('shop.checkOut');
    }

    public function saveOrder() {
    	return view('order.orders.');
    }

}
