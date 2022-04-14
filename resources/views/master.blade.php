<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RedStore: @yield('title')</title>
    <link rel="stylesheet" href={{asset('style.css')}}>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" 
    rel="stylesheet">
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src={{asset('images/logo.png')}} width="125px">
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li><a href="{{route('product_list')}}">Products</a></li>
                        <li><a href="{{route('about')}}">About</a></li>
                        <li><a href="{{route('contacts')}}">Contacts</a></li>
                        <li><a href="{{route('login')}}">Account</a></li>
                    </ul>
                </nav>
                <img src={{asset('images/cart.png')}} width="30px" height="30px">
                <img src={{asset('images/menu.png')}} class="menu-icon"
                onclick="menutoggle()">
            </div>
        </div>
    </div>

    <!--____________________________________________________________-->
    @yield('content')
    <!--____________________________________________________________-->

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download App for Android and ios mobile phone.</p>
                    <div class="app-logo">
                        <img src={{asset('images/play-store.png')}}>
                        <img src={{asset('images/app-store.png')}}>
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src={{asset('images/logo-white.png')}}>
                    <p>Our Purpose Is To Make Money!</p>
                </div>
                <div class="footer-col-3">
                    <h3>Additional Information</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Posts</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2020 - Easy Tutorials</p>
        </div>
    </div>
    <!-- js for toggle menu -->
    <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px";
        function menutoggle(){
            if(MenuItems.style.maxHeight == "0px"){
                MenuItems.style.maxHeight = "200px";
            }
            else{
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>
</html>