<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Product_Categories;

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
			// $filteredId = Product_categories::where('categories_id', $categorieFilter);

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
    	return view('order.orders');
    }

}
