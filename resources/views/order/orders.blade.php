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
					<p class="information-opener" id="informatie-{{ $order->id }}">Bestelling voor: {{ $order->klanten_naam }}</p>
					<div class="bestelling-klik" class="none" id="bestelling-{{ $order->id }}">	
						<div class="bestelling-info" id="bestelling-producten-gegevens">
							<p>Bestellinggegevens:</p>
							@foreach($product as $aproduct) 
								@foreach($order_details as $order_detail)
									@if ($order_detail->product_id == $aproduct->id)
										@if($order_detail->order_id == $order->id)
										<div class="bestelling-producten">								
											<img class="bestelling-images" src="/images/{{ $aproduct->afbeelding }}">
											<p>Naam: {{ $aproduct->productnaam }}</p>
											<p>Quantiteit: {{ $order_detail->quantiteit }}</p>
											<p>Prijs per Stuk: &euro; {{ $aproduct->prijs }}
										</div>		
										@endif
									@endif
								@endforeach
							@endforeach
						</div>		
						@foreach($klanten as $klant)
						@if ($klant->id == $order->klanten_id)
						<div class="bestelling-info" id="bestelling-adress-gegevens">
							<p>Klantengegevens:</p>
							<p>Uw Voor- en Achternaam: {{ $klant->voornaam }} {{ $klant->achternaam }}</p>
							<p>Uw adress: {{ $klant->adress }}</p>
							<p>Uw postcode: {{ $klant->postcode }}</p>
							<p>Uw telefoonnummer: {{ $klant->telefoonnummer }}</p>
							<p>Uw emailadress: {{ $klant->emailadress }}</p>
						</div>
						@endif
						@endforeach
						<div class="bestelling-info" id="bestelling-betaal-gegevens">
							<p>Totale prijs: &euro; {{ $order->totale_prijs }}</p>
						</div>
					</div>
					@endforeach
				</div>
			</li>
		</div>
	</div>


@endsection
