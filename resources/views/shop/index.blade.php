@extends('layouts.layout')

@section('content')
        <div class="flex-center position-ref full-height">
            <div class="content-products">
                <div class="sidebar">
                    <h3>Sidebar</h3>
                    <h5>Hier komen de opties om te zoeken op categories, prijs etc</h5>
                    <div class="filter-navigation" id="category-filter">
                        <h2 class="filter-title">Categoriëen</h2>
                        <span class="checkbox-input">
                            <input type="checkbox" name="" value="">Hier komt nog meer
                        </span>
                    </div>
                    <div class="filter-navigation" id="price-filter">
                        <h2 class="filter-title">Prijzen</h2>
                        <span class="checkbox-input">
                            <input type="checkbox" name="" value="">Hier komt nog meer
                        </span>
                    </div>
                </div>
                <div class="categories">
                    <img class="banner" src="images/Nix.png">
                </div>
                <div class="products">
                    @foreach($product as $product)
                    <li class="product-list">
                        <div class="product">
                            <img href="/shop/1" class="product-image" src="/images/{{ $product->afbeelding }}">
                            <p>{{ $product['productnaam'] }}</p> 
                            <p>&euro;{{ $product['prijs'] }}</p>
                            <p>{{ $product['categorie'] }}</p>
                            <a class="Shoppingcart-button-small" href="">Shoppingcart</a>    
                            <a class="information-title" href="/shop/{{ $product['id'] }}">Meer info...</a>   
                        </div>
                    </li>
                    @endforeach
                </div>
            </div>
        </div>
@endsection

