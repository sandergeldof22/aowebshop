@extends('layouts.layout')

@section('content')
        <div class="flex-center position-ref full-height">
            <div class="product-details">
                <div class="product-information">
                    <div class="product-image-holder">
                        <img src="/images/{{ $product->image }}">
                    </div>
                    <div class="product-information-details">
                        <h2>{{ $product->productname }}</h2>
                        @foreach($categories as $categorie)
                        @if($product->categorie_id == $categorie->id)
                        <p>Categorie: {{ $categorie->name }}</p>
                        @endif
                        @endforeach
                        <p>Prijs: &euro;{{ $product->price }}</p>
                        <p>Merk: {{ $product->brand }}</p>
                    </div>
                </div>
                <div class="product-interactivity">
                    <a class="Shoppingcart-button-big" href="{{ route('product.addToCart', ['id' => $product->id]) }}">Add to Shoppingcart</a>
                    <a class="Shoppingcart-button-pay" href="{{ route('product.addAndGetShoppingCart', ['id' => $product->id]) }}">Add and go to Payment</a>
                    <p>&#10004; Geldof's Garantie garandeert voor 30 dagen.</p>
                    <p>&#10004; Dag- en Nacht klantenservice.</p>
                </div>
                <div class="product-description">
                    <p>{{ $product->description }}</p>
                </div>
            </div>
        </div>
@endsection


