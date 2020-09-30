@extends('layouts.layout')

@section('content')


<div class="order-banner">
    <img class="banner" src="images/Nix.png">
</div>
<div class="customer-information">
	<form action="{{ route('shop.saveOrder') }}" class="checkout-form" method="POST">
		@csrf
		<label for="first_name">Voornaam:</label><br>
		<input type="text" class="customer-input" name="first_name" value=""><br>
		<label for="last_name">Achternaam:</label><br>
		<input type="text" class="customer-input" name="last_name" value=""><br>
		<label for="adress">Uw Adress:</label><br>
		<input type="text" class="customer-input" name="adress" value=""><br>
		<label for="postal_code">Uw postcode:</label><br>
		<input type="text" class="customer-input" name="postal_code" value=""><br>
		<label for="age">Uw leeftijd:</label><br>		
		<input type="number" class="customer-input" name="age" value=""><br>
		<label for="emailadress">Uw Emailadress:</label><br>		
		<input type="text" class="customer-input" name="emailadress" value=""><br>		
		<label for="telephone_number">Uw telefoonnummer:</label><br>
		<input type="tel" pattern="[0-9]{10}" class="customer-input" name="telephone_number" value=""><br>
		<input class="shoppingcart-button" type="submit" name="submit">	
		<input type="reset">	
	</form>
	<h4>*Uw gegevens worden uitsluitend gebruikt voor doeleinden met betrekking tot deze bestelling</h4>
</div>













@endsection