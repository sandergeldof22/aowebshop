@extends('layouts.layout')

@section('content')


<div class="order-banner">
    <img class="banner" src="images/Nix.png">
</div>
<div class="customer-information">
	<form action="{{ route('shop.saveOrder') }}" class="checkout-form" method="POST">
		@csrf
		<label for="voornaam">Voornaam:</label><br>
		<input type="text" class="customer-input" name="voornaam" value=""><br>
		<label for="achternaam">Achternaam:</label><br>
		<input type="text" class="customer-input" name="achternaam" value=""><br>
		<label for="adress">Uw Adress:</label><br>
		<input type="text" class="customer-input" name="adress" value=""><br>
		<label for="postcode">Uw postcode:</label><br>
		<input type="text" class="customer-input" name="postcode" value=""><br>
		<label for="leeftijd">Uw leeftijd:</label><br>		
		<input type="number" class="customer-input" name="leeftijd" value=""><br>
		<label for="emailadress">Uw Emailadress:</label><br>		
		<input type="text" class="customer-input" name="emailadress" value=""><br>		
		<label for="telefoonnummer">Uw telefoonnummer:</label><br>
		<input type="tel" pattern="[0-9]{10}" class="customer-input" name="telefoonnummer" value=""><br>
		<input class="shoppingcart-button" type="submit" name="submit">	
		<input type="reset">	
	</form>
	<h4>*Uw gegevens worden uitsluitend gebruikt voor doeleinden met betrekking tot deze bestelling</h4>
</div>













@endsection