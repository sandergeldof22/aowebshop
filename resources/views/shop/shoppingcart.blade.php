@extends('layouts.layout')

@section('content')

<h2 class="shoppingcart-welkom">Welkom in de Shoppingcart, hier vind u al uw producten</h1>
<div class="shoppingcart-container">
	<div class="shoppingcart-products">
		@if(Session::has('cart'))
		<ul class="products-list-cart">
			@foreach($products as $product)
			dd($product);
			<li class="shoppingcart-product">
				<img class="product-image" src="/images/{{ $product['item']['afbeelding'] }}">&nbsp;
				<strong class="product-cart-naam">{{ $product['item']['productnaam'] }}</strong>
				<span class="product-cart-prijs">Prijs per stuk: &euro;{{ $product['item']['prijs'] }}</span><br>
				<form method="post" action="{{ route('product.updateCart', ['id' => $product]) }}">
					<span><label class="shopping-cart-quantity">Totale hoeveelheid:&nbsp;{{ $product['quantity'] }}</label>
					<input type="hidden" name="token" value="<?php csrf_token() ?>">
					<?php echo scrf_token(); ?>
					<input type="number" id="quantity" name="quantity" value="{{ $product['quantity'] }}" min="0" max="10">
					<input type="submit" name="updateCart"></span>
					<br>
				</form>
				<span class="shopping-cart-price">Totale Prijs:&nbsp;{{ $product['price'] }}</span>
			</li>
			@endforeach
		</ul>
		<h3 class="totale-prijs">Totale Prijs: {{ $totalPrice }}</h3>
		<button class="afrekenen">Betalen</button>
		@else
		<h2>Voeg alstublieft producten toe aan de shoppingcart !</h2>
		@endif	
	</div>
</div>
@endsection