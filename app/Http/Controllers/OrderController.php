<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use App\Order;
use App\Order_detail;
use App\Customer;

use App\Http\Request as HttpRequest;
use Session;

class OrderController extends Controller
{
	/*
	*Deze functie haalt alle gegevens op uit verschillende databasen en geeft deze mee aan de view.
	*de view voegt deze samen om een duidelijk beeld te geven van een en meerdere Orders.
	*/
	public function index(){

		$orders = Order::all();
		$order_details = Order_detail::all();
		$customers = Customer::all();
		$products = Product::all();

		return view('order/orders', [
			'orders' =>  $orders,
			'order_details' =>  $order_details,
			'customers' =>  $customers,
			'product' =>  $products
		]);
	}

	public function deleteOrder(Request $request, $id){
		$order = Order::find($id);
		$order_detail = Order_detail::where('order_id', $order->id);
		$customer = Customer::where('id', $order->customer_id);

		$order_detail->delete();
		$order->delete();
		$customer->delete();

		return redirect('/orders');
	}

	public function noauth(){
		return view('order.unauthenticated');
	}
	

}