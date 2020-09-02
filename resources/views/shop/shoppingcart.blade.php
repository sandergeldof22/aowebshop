@extends('layouts.layout')

@section('content')
<h2 class="shoppingcart-welkom">Welkom in de Shoppingcart, hier vind u al uw producten</h1>
<div class="shoppingcart-container">
	<div class="shoppingcart-products">
		@if(Session::has('cart'))
		<ul class="products-list-cart">
			@foreach($products as $product)
			<li class="shoppingcart-product">
				<img class="product-image" src="/images/{{ $product['item']['afbeelding'] }}">&nbsp;
				<strong class="product-cart-naam">{{ $product['item']['productnaam'] }}</strong>
				<span class="product-cart-prijs">&euro;{{ $product['item']['prijs'] }}</span>
				<span class="shopping-cart-quantity">{{ $product['quantity'] }}</span>
				<span class="shopping-cart-price">{{ $product['price'] }}</span>
			</li>
			@endforeach
		</ul>
		<h3>Totale Prijs: {{ $totalPrice }}</h3>
		@else
		<h2>Voeg alstublieft producten toe aan de shoppingcart !</h2>
		@endif	
	</div>
</div>
@endsection