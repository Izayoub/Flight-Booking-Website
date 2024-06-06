<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flighty</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    <!-- Icon Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light mt-4">
    <div class="container">
        <a class="navbar-brand" href="#">Flivan</a>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/abouts') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/offers') }}">Offers</a>
                </li>
                <li class="nav-item">
                    <a  class="nav-link" href="{{ route('flights.index') }}">Flights</a>
                </li>
                <li class="nav-item">
                    <a  class="nav-link" href="{{ url('/details')}}">Destinations</a></li>
                </li>
            </ul>
        </div>
        <button class="btn btn-outline-dark">Contact</button>
    </div>
</nav>

<div class="container-xxl py-5">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Explore By Category</h1>
        <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <a class="cat-item rounded p-4" href="{{route('airports.index')}}">
                    <i class="fa fa-3x fa-mail-bulk text-primary mb-4"></i>
                    <h6 class="mb-3">Airport</h6>

                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <a class="cat-item rounded p-4" href="{{ route('flights.redirect') }}">
                    <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                    <h6 class="mb-3">Flights</h6>

                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <a class="cat-item rounded p-4" href="{{ route('users.index')}}">
                    <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                    <h6 class="mb-3">Users</h6>

                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <a class="cat-item rounded p-4" href="{{ route('airlines.index')}}">
                    <i class="fa fa-3x fa-tasks text-primary mb-4"></i>
                    <h6 class="mb-3">Airline</h6>
                </a>
            </div>

        </div>
    </div>
</div>

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.min.js"></script>
<!-- Your Custom Scripts -->
<script src="your-script.js"></script>
</body>
</html>
<!-- Category End -->
