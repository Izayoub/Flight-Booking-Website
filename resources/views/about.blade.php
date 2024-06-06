@extends('landing_page.layout')


@section('content')
    <nav>
        <div class="nav__logo">Flivan</div>
        <ul class="nav__links">
            <li class="link"><a href="{{ url('/') }}">Home</a></li>
            <li class="link"><a href="{{ url('/abouts') }}">About</a></li>
            <li class="link"><a href="{{ url('/offers') }}">Offers</a></li>
            <li class="link"><a href="#">Seats</a></li>
            <li class="link"><a href="#">Destinations</a></li>
        </ul>
        <button class="btn">Contact</button>
    </nav>

    <section class="section__container about__container">
        <h2 class="section__header">About Us</h2>
        <div class="about__content">
            <p>
                Welcome to Web Design Mastery, your ultimate destination for finding and booking amazing travel experiences. At Web Design Mastery, we are dedicated to providing you with seamless journeys and exceptional service.
            </p>
            <p>
                Our mission is to make travel planning effortless and enjoyable. Whether you're seeking adventure in exotic destinations or looking for a relaxing getaway, we've got you covered. With our user-friendly booking platform and expert travel support, you can travel with confidence and peace of mind.
            </p>
            <p>
                At Web Design Mastery, we believe that travel is more than just visiting new places; it's about creating unforgettable memories and experiences that last a lifetime. That's why we're committed to offering you the best travel deals, insider tips, and personalized recommendations to ensure your trip is nothing short of extraordinary.
            </p>
        </div>
    </section>

    <section class="section__container about__gallery">
        <h2 class="section__header">Our Gallery</h2>
        <div class="gallery__grid">
            <img src="../../../public/assets/about-1.jpg" alt="About Image 1">
            <img src="../../../public/assets/about-2.jpg" alt="About Image 2">
            <img src="../../../public/assets/about-3.jpg" alt="About Image 3">
            <img src="../../../public/assets/about-4.jpg" alt="About Image 4">
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
