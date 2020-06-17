@extends('layouts.layout')

@section('content')
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content-products">
                <div class="sidebar">
                    <h3>Sidebar</h3>
                    <h5>Hier komen de opties om te zoeken op categories, prijs etc</h5>
                </div>
                <div class="categories">
                    <img class="banner" src="images/Nix.png">
                </div>
                <div class="products">
                    <div class="product">
                        <img src="">
                        <p>plaatje</p>
                        <p>titel</p> 
                        <p>Prijs</p>
                        <p>winkel kart button</p>          
                    </div>
                </div>
            </div>
        </div>
@endsection