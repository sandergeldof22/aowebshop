@extends('layouts.layout')

@section('content')
	<div class="top-image-holder">
		<img class="order-banner" src="images/Nix.png">
	</div>
	<div class="order-holder">
		<?php $orders=DB::table('orders')->get(); ?>
		<?php $order_details=DB::table('order_details')->get(); ?>
		<?php $klanten=DB::table('klanten')->get(); ?>
		<?php $product=DB::table('product')->get(); ?>
		<div class="order-box">
			<li class="order-list">
				<div class="orders">
					<h2 class="bestelling-intro">Hier vindt u al uw bestellingen</h2>
					@foreach($orders as $order)
					<div class="bestelling-klik">
						<h3>Bestelling voor: {{ $order->klanten_naam }}</h3>
						<div class="bestelling-producten-gegevens">
							<p>Bestellinggegevens:</p>
							@foreach($product as $aproduct) 
								@foreach($order_details as $order_detail)
									@if ($order_detail->product_id == $aproduct->id)
										@if($order_detail->order_id == $order->id)
											<p>{{$aproduct->productnaam}}</p>
					
										@endif
									@endif
								@endforeach
							@endforeach
					</div>		
					@foreach($klanten as $klant)
						@if ($klant->id == $order->klanten_id)
						<div class="bestelling-adress-gegevens">
							<p>Klantengegevens:</p>
							<p>Uw Voor- en Achternaam: {{ $klant->voornaam }} {{ $klant->achternaam }}</p>
							<p>Uw adress: {{ $klant->adress }}</p>
							<p>Uw postcode: {{ $klant->postcode }}</p>
							<p>Uw telefoonnummer: {{ $klant->telefoonnummer }}</p>
							<p>Uw emailadress: {{ $klant->emailadress }}</p>
						</div>
						@endif
					@endforeach
					</div>
					@endforeach
				</div>
			</li>
		</div>
	</div>

@endsection