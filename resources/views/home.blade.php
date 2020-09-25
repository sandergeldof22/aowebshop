@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="top-image-holder">
        <img class="order-banner" src="../images/Nix.png">
    </div>
        <div class="home-holder">
            <div class="card">
                <div class="home-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2 class="home-welkom">You are now logged in</h2>
                    <h2 class="home-welkom">Welkom {{ Auth::user()->name }} !</h2>
                    <a href="/" class="welcome-button">Naar de homepagina</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
