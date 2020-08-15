@extends('layouts.layout')

@section('content')
        <div class="flex-center position-ref full-height">

            <div class="product-details">
                <div class="product-information">
                    <div class="product-image-holder">
                        <img src="/images/{{ $product->afbeelding }}">
                    </div>
                    <div class="product-information-details">
                        <h2>{{ $product->productnaam }}</h2>
                        <p>Categorie: {{ $product->categorie }}</p>
                        <p>Prijs: &euro;{{ $product->prijs }}</p>
                        <p>Merk: {{ $product->merk }}</p>
                    </div>
                </div>
                <div class="product-interactivity">
                    <a class="Shoppingcart-button-big" href="">Add to Shoppingcart</a>
                    <a class="Shoppingcart-button-pay" href="">Add and go to Payment</a>
                    <p>&#10004; Geldof's Garantie garandeert voor 30 dagen.</p>
                    <p>&#10004; Dag- en Nacht klantenservice.</p>
                </div>
                <div class="product-description">
                    <p>{{ $product->omschrijving }}</p>
                </div>
            </div>
        </div>
@endsection

