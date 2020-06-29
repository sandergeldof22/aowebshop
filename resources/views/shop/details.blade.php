@extends('layouts.layout')

@section('content')
        <div class="flex-center position-ref full-height">

            <div class="product-details">
                <div class="product-information">
                    <div class="product-image-holder">
                        <img src="/images/Killa-Snus.jpg">
                    </div>
                    <div class="product-information-details">
                        <h2>Titel</h2>
                        <p>Category</p>
                        <p>Prijs</p>
                        <p>Merk</p>
                        Wildcard parameter = {{ $id }}
                    </div>
                </div>
                <div class="product-interactivity">
                    <a class="Shoppingcart-button-big" href="">Add to Shoppingcart</a>
                    <a class="Shoppingcart-button-pay" href="">Add and go to Payment</a>
                    <p>&#10004; Geldof's Garantie garandeert voor 30 dagen.</p>
                    <p>&#10004; Dag- en Nacht klantenservice.</p>
                </div>
                <div class="product-description">
                    <p>Product description</p>
                    <p>een lange descripion</p>
                </div>
            </div>
        </div>
@endsection