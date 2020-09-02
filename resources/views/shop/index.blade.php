@extends('layouts.layout')

@section('content')
        <div class="flex-center position-ref full-height">
            <div class="content-products">
                <div class="sidebar">
                    <h3>Sidebar</h3>
                    <h5>Hier komen de opties om te zoeken op categories, prijs etc</h5>
                    <form action="" method="POST"> 
                    <div class="filter-navigation" id="category-filter">
                        <h2 class="filter-title">Categoriëen</h2>
                        <?php $categories=DB::table('categories')->get(); ?>
                        <span class="checkbox-input">
                        @foreach($categories as $categorie) 
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                            <input id="categorie-box{{$categorie->id}}" class="categorie-box" type="checkbox" name="categories[]" value="{{$categorie->naam}}">{{$categorie->naam}}
                            <br>
                            @if (in_array($categorie->id, explode(',', request()->input('filter.categorie'))))
                                checked
                            @endif
                        @endforeach                            
                        </span>
                    </div>
                    <input type="submit" name="Filter">
                </div>
                <div class="categories">
                    <img class="banner" src="images/Nix.png">
                </div>
                <div class="products">
                    @foreach($product as $product)
                    <li class="product-list">
                        <div class="product">
                            <img href="/shop/1" class="product-image" src="/images/{{ $product->afbeelding }}">
                            <p class="productnaam"> {{ $product['productnaam'] }}</p> 
                            <p class="productprijs"> &euro;{{ $product['prijs'] }}</p>
                            <p class="productcategorie"> {{ $product['categorie'] }}</p>
                            <a class="Shoppingcart-button-small" href="{{ route('product.addToCart', ['id' => $product->id]) }}">Shoppingcart</a>    
                            <a class="information-title" href="/shop/{{ $product['id'] }}">Meer info...</a>  
                        </div>
                    </li>
                    @endforeach
                </div>
            </div>
        </div>
@endsection

