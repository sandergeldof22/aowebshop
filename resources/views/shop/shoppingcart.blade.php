@extends('layouts.layout')

@section('content')
<h2 class="shoppingcart-welkom">Welkom in de Shoppingcart, hier vind u al uw producten</h1>
<div class="shoppingcart-container">
	<div class="shoppingcart-products">
		@if(Session::has('cart'))
		<ul class="products-list-cart">
			@foreach($products as $product)
			@if($product['quantity'] > 0)
			<li class="shoppingcart-product">
				<img class="product-image" src="/images/{{ $product['item']['image'] }}">&nbsp;
				<strong class="product-cart-naam">{{ $product['item']['productname'] }}</strong>
				<button onclick="location.href='{{ route('shoppingcart.deleteFromCart', ['id' => $product['id']]) }}'" class="deletebutton">X</button>		
				&nbsp;<span class="product-cart-prijs">Prijs per stuk: &euro;{{ $product['item']['price'] }}</span><br>
				<form class="cart-form" method="post" action="{{ route('shoppingcart.updateCart', ['id' => $product['id']]) }}">
					<span class="cart-form-span"><label class="shopping-cart-quantity">Totale hoeveelheid:&nbsp;{{ $product['quantity'] }}</label>
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">	
					<input type="number" id="quantity" required="required" name="quantity" value="{{ $product['quantity'] }}" min="0">
					<input type="submit" name="updateCart"></span>
					<br>
				</form>
				<span class="shopping-cart-price">Totale Prijs:&nbsp;&euro;{{ $product['price'] }}</span>
			</li>
			@endif
			@endforeach
		</ul>
		<h3 class="totale-prijs">Totale Prijs: &euro; {{ $totalPrice }}</h3>
		<a class="shoppingcart-button" href="{{ route('shop.checkOut') }}">Afrekenen</a>
		@else
		<h2 class="shoppingcart-none">Voeg alstublieft producten toe aan de shoppingcart !</h2>
		@endif	
	</div>
</div>
@endsection