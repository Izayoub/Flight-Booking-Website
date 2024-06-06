<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Welcome to Travel Agents</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/inner/favicon.png')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('calenplugin/css/daterangepicker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style1.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}" />
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link href="{{asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">


</head>

<body>
<!--start Header-->
<nav>
    <div class="nav__logo">Flivan</div>
    <ul class="nav__links">
        <li class="link"><a href="{{ url('/') }}">Home</a></li>
        <li class="link"><a href="{{ url('/abouts') }}">About</a></li>
        <li class="link"><a href="{{ url('/test') }}">Offers</a></li>
        <li class="link"><a href="{{ route('flights.index') }}">Flights</a></li>
        <li class="link"><a href="{{ url('/details')}}">Destinations</a></li>
        <li class="link"><a href="{{ url('/admins') }}">Admin</a></li>

    </ul>
    <button class="btn" ><a href="">Contact</a></button>
</nav>

<!--end header-->

@yield('content')

<!--start footer-->
<footer class="footer">
    <div class="section__container footer__container">
        <div class="footer__col">
            <h3>Flivan</h3>
            <p>
                Where Excellence Takes Flight. With a strong commitment to customer
                satisfaction and a passion for air travel, Flivan Airlines offers
                exceptional service and seamless journeys.
            </p>
            <p>
                From friendly smiles to state-of-the-art aircraft, we connect the
                world, ensuring safe, comfortable, and unforgettable experiences.
            </p>
        </div>
        <div class="footer__col">
            <h4>INFORMATION</h4>
            <p>Home</p>
            <p>About</p>
            <p>Offers</p>
            <p>Seats</p>
            <p>Destinations</p>
        </div>
        <div class="footer__col">
            <h4>CONTACT</h4>
            <p>Support</p>
            <p>Media</p>
            <p>Socials</p>
        </div>
    </div>
    <div class="section__container footer__bar">
        <p>Copyright © 2023 Web Design Mastery. All rights reserved.</p>
        <div class="socials">
            <span><i class="ri-facebook-fill"></i></span>
            <span><i class="ri-twitter-fill"></i></span>
            <span><i class="ri-instagram-line"></i></span>
            <span><i class="ri-youtube-fill"></i></span>
        </div>
    </div>
</footer>
@yield('style')
<!--end footer-->
</body>
</html>
@yield('scripts')
