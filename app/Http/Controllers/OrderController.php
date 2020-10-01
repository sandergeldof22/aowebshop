<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use App\Orders;
use App\Order_details;
use App\Customers;

use App\Http\Request as HttpRequest;
use Session;

class OrderController extends Controller
{

	public function index(){

		$orders = Orders::all();
		$order_details = Order_details::all();
		$customers = Customers::all();
		$product = Product::all();

		return view('order/orders', [
			'orders' =>  $orders,
			'order_details' =>  $order_details,
			'customers' =>  $customers,
			'product' =>  $product
		]);
	}
	

}