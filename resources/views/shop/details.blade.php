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

            <div class="product-details">
                <div class="product-information">
                    <p>Product information</p>
                    <p>informatie</p>
                    Wildcard parameter = {{ $id }}
                </div>
                <div class="product-interactivity">
                    <p>Product interactivity</p>
                    <p>plaatjes en buttons</p>
                </div>
                <div class="product-description">
                    <p>Product description</p>
                    <p>een lange descripion</p>
                </div>
            </div>
        </div>
@endsection