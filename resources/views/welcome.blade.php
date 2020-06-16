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

            <div class="content">
                <div class="title m-b-md">
                   <h1>Welkom bij Geldof's Tabakshop</h1>
                </div>
                <div id="introductie">
                    <h2>Wij hier van Geldof willen u natuurlijk de allerlekkerste smaak aan kunnen bieden</h2>
                </div>
                <div id="home-image-place">
                    <img src="images/soorten-tabak.jpg" id='home-image'>
                    <h3>Met keuze uit al uv favoriete tabak</h3>
                </div>
                </div>
            </div>
        </div>
@endsection