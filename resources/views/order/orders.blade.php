@extends('layouts.layout')

@section('content')
	<div class="top-image-holder">
		<img class="order-banner" src="images/Nix.png">
	</div>
	<div class="order-holder">
		<div class="order-box">
			<li class="order-list">
				<div class="orders">
					<h2 class="bestelling-intro">Hier vindt u al uw bestellingen</h2>
					@if (Auth::check())
					@foreach($orders as $order)
					@if ($order->user_id == Auth::user()->id)	
					<p class="information-opener" id="informatie-{{ $order->id }}">Bestelling voor: {{ $order->customer_name }}</p>
					<div class="bestelling-klik" class="none" id="bestelling-{{ $order->id }}">	
						<div class="bestelling-info" id="bestelling-producten-gegevens">
							<p>Bestellinggegevens:</p>
							@foreach($product as $aproduct) 
								@foreach($order_details as $order_detail)
									@if ($order_detail->product_id == $aproduct->id)
										@if($order_detail->order_id == $order->id)
										<div class="bestelling-producten">								
											<img class="bestelling-images" src="/images/{{ $aproduct->image }}">
											<p>Naam: {{ $aproduct->productname }}</p>
											<p>Quantiteit: {{ $order_detail->quantity }}</p>
											<p>Prijs per Stuk: &euro; {{ $aproduct->price }}
										</div>		
										@endif
									@endif
								@endforeach
							@endforeach
						</div>		
						@foreach($customers as $customer)
						@if ($customer->id == $order->customer_id)
						<div class="bestelling-info" id="bestelling-adress-gegevens">
							<p>Klantengegevens:</p>
							<p>Uw Voor- en Achternaam: {{ $customer->first_name }} {{ $customer->last_name }}</p>
							<p>Uw adress: {{ $customer->adress }}</p>
							<p>Uw postcode: {{ $customer->postal_code }}</p>
							<p>Uw telefoonnummer: {{ $customer->telephone_number }}</p>
							<p>Uw emailadress: {{ $customer->emailadress }}</p>
						</div>
						@endif
						@endforeach
						<div class="bestelling-info" id="bestelling-betaal-gegevens">
							<p>Totale prijs: &euro; {{ $order->total_price }}</p>
						</div>
						<div class="bestelling-info" id="bestelling-annuleer">
							<a class="annuleer-button" href="{{ route('order.deleteOrder', ['id' => $order->id]) }}">Annuleer</a>
						</div>
					</div>
					@endif
					@endforeach
					@else
					<h3 class="niet-ingelogd">U moet ingelogd zijn wilt u uw bestellingen zien !</h3>
					<a class="niet-ingelogd-button" href="/login">login</a>
					@endif
				</div>
			</li>
		</div>
	</div>


@endsection
