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
                    <div class="product">
                        <img href="/shop/1" class="product-image" src="/images/Killa-Snus.jpg">
                        <p>titel</p> 
                        <p>Prijs</p>
                        <a class="Shoppingcart-button-small" href="">Shoppingcart</a>    
                        <a class="information-title" href="/shop/1">Meer info...</a>   
                    </div>
                </div>
            </div>
        </div>
@endsection

