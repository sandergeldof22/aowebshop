<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;

use App\Http\Request as HttpRequest;
use Session;

class OrderController extends Controller
{

	public function index(){
		return view('order/orders');
	}
	

}