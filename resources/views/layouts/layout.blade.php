<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="../css/style.css">

    </head>
    <body>
        <div id="navbar">
            <div id="topnav">
                <ul>
                    <li><p class="list-item" id="name-tag-navbar">Geldof's Tabakshop</p></li>
                    <li><a class="navbar-a" href="/" class="list-item">Home</a></li>
                    <li><a class="navbar-a" href="/shop" class="list-item">Shop</a></li>
                </ul>
            </div>
            <div id="bottomnav">
                <ul>
                    <li><a class="navbar-a" href="/login" id="login">Login</a></li>
                    <li><a class="navbar-a" href="/register" id="login">Registreer</a></li>              
                    <li><a class="navbar-a" href="/shoppingcart" id="shoppingcart-navbar">Shoppingcart</a></li>                       
                </ul>   
            </div>
        </div>
@yield('content')
        <footer id="footer">
            <p id="footertext">@copyright Sander Geldof<p>
        </footer>
    </body>
</html>