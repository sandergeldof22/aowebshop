@extends('layouts.layout')

@section('content')


<div class="order-banner">
    <img class="banner" src="images/Nix.png">
</div>
<div class="customer-information">
	<form action="{{ route('order.orders') }}" class="checkout-form" method="POST">
		<label for="firstName">Voornaam:</label><br>
		<input type="text" class="customer-input" name="firstName" value=""><br>
		<label for="lastName">Achternaam:</label><br>
		<input type="text" class="customer-input" name="lastName" value=""><br>
		<label for="adress">Uw Adress:</label><br>
		<input type="text" class="customer-input" name="adress" value=""><br>
		<label for="huisnummer">Uw Huisnummer:</label><br>
		<input type="text" class="customer-input" name="huisnummer" value=""><br>
		<label for="postcode">Uw postcode:</label><br>
		<input type="text" class="customer-input" name="postcode" value=""><br>
		<label for="telefoonnummer">Uw telefoonnummer:</label><br>
		<input type="tel" pattern="[0-9]{10}" class="customer-input" name="telefoonnummer" value=""><br>
		<input class="shoppingcart-button" type="submit" name="submit">		
	</form>
	<h4>*Uw gegevens worden uitsluitend gebruikt voor doeleinden met betrekking tot deze website</h4>
</div>













@endsection