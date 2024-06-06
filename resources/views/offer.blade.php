@extends('landing_page.layout')


@section('content')
    <nav>
        <div class="nav__logo">Flivan</div>
        <ul class="nav__links">
            <li class="link"><a href="{{ url('/') }}">Home</a></li>
            <li class="link"><a href="{{ url('/abouts') }}">About</a></li>
            <li class="link active"><a href="{{ url('/offers') }}">Offers</a></li>
            <li class="link"><a href="#">Seats</a></li>
            <li class="link"><a href="#">Destinations</a></li>
        </ul>
        <button class="btn">Contact</button>
    </nav>

    <section class="section__container offers__container">
        <h2 class="section__header">Special Offers</h2>
        <div class="offers__grid">
            <div class="offer__card">
                <img src="assets/offer-1.jpg" alt="Offer Image">
                <div class="offer__details">
                    <h3>Explore Dubai</h3>
                    <p>Discover the wonders of Dubai with our exclusive travel packages. From luxurious accommodations to thrilling excursions, experience the best of Dubai with us.</p>
                    <button class="btn">View Offer</button>
                </div>
            </div>
            <div class="offer__card">
                <img src="assets/offer-2.jpg" alt="Offer Image">
                <div class="offer__details">
                    <h3>Paris Getaway</h3>
                    <p>Experience the romance of Paris with our curated vacation packages. Enjoy fine dining, iconic landmarks, and unforgettable moments in the City of Love.</p>
                    <button class="btn">View Offer</button>
                </div>
            </div>
            <div class="offer__card">
                <img src="assets/offer-1.jpg" alt="Offer Image">
                <div class="offer__details">
                    <h3>Island Paradise</h3>
                    <p>Escape to a tropical paradise with our island getaway deals. Relax on pristine beaches, snorkel in crystal-clear waters, and immerse yourself in pure bliss.</p>
                    <button class="btn">View Offer</button>
                </div>
            </div>
        </div>
    </section>

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
@endsection
