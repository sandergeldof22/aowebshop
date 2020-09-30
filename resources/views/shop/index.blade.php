@extends('layouts.layout')

@section('content')
        <div class="flex-center position-ref full-height">
            <div class="content-products">
                <div class="sidebar">
                    <form action="" method="POST"> 
                    <div class="filter-navigation" id="category-filter">
                        <h2 class="filter-title">Categoriëen</h2>
                        <?php $categories=DB::table('categorie')->get(); ?>
                        <span class="checkbox-input">
                        @foreach($categories as $categorie) 
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                            <input id="categorie-box{{$categorie->id}}" class="categorie-box" type="checkbox" name="categories[]" value="{{$categorie->id}}">{{$categorie->name}}
                            <br>
                            @if (in_array($categorie->id, explode(',', request()->input('filter.categorie'))))
                                checked
                            @endif
                        @endforeach                            
                        </span>
                    </div>
                    <input type="submit" name="Filter">
                    </form>
                </div>
                <div class="categories">
                    <img class="banner" src="images/Nix.png">
                </div>
                <div class="products">
                    @foreach($product as $product)
                    <li class="product-list">
                        <div class="product">
                            <form method="post" class="product-form" action="{{ route('product.addToCart', ['id' => $product->id, 'quantity' => $product->quantity]) }}">
                                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                <img href="/shop/1" class="product-image" src="/images/{{ $product->image }}">
                                <p class="productnaam"> {{ $product['productname'] }}</p> 
                                <p class="productprijs"> &euro;{{ $product['price'] }}</p>
                                <a class="information-title" href="/shop/{{ $product['id'] }}">Meer info...</a>        <input class="productquantiteit" type="number" name="quantity" id="quantity" value="{{ $product['quantity'] }}" required="required" min="1" placeholder="1">
                                <input class="Shoppingcart-button-small" type="submit" value="Add to Shoppingcart">
                            </form>      
                        </div>
                    </li>
                    @endforeach
                </div>
            </div>
        </div>
@endsection

