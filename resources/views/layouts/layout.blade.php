<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script type="text/javascript" src="{{ URL::asset('js/openOrderInfo.js') }}"></script>        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        
        <title>Laravel</title>

    </head>
    <body>
        <div id="navbar">
            <div id="topnav">
                <ul class="navhelp">
                    <li><p class="list-item" id="name-tag-navbar">Geldof's Tabakshop</p></li>
                    <li><a class="navbar-a" href="/" class="list-item">Home</a></li>
                    <li><a class="navbar-a" href="/shop" class="list-item">Shop</a></li>
                    <li><a class="navbar-a" href="/orders" class="list-item">Orders</a></li>
                </ul>
            </div>
            <div id="bottomnav">
                <ul class="navhelp">
                    @guest
                        <li><a class="navbar-a" href="/login" id="login">Login</a></li>
                        @if (Route::has('register'))
                            <li><a class="navbar-a" href="/register" id="login">Registreer</a></li>
                        @endif
                    @else 
                            <li class="logged-in">
                                <a id="User-logged-in" class="navbar-a" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest             
                    <li>
                        <a class="navbar-a" href="/shoppingcart" id="shoppingcart-navbar">Shoppingcart &nbsp; <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQuantity : "" }}</span></a>
                    </li>                       
                </ul>   
            </div>
        </div>
@yield('content')
        <footer id="footer">
            <p id="footertext">@copyright Sander Geldof<p>
        </footer>
    </body>
</html>