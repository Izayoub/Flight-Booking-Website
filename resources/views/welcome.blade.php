<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Welcome to Travel Agents</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/inner/favicon.png" />
    <link rel="stylesheet" type="text/css" href="calenplugin/css/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="css/style1.css" />

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <link rel="stylesheet" href="css/styles.css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
<!--start Header-->
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

<!--end header-->
<section class="loader" style="display: none;">
    <section id="section-hotel">
        <div class="container">

    </section>
    <!--section-->
    <section>
        <div class="container">
            <div class="row">
                <!--left portion start-->
                <div class="col-md-12 col-lg-3 col-xl-3 col-xs-12 mx-auto mt-3 ">
                    <div class="filter-head text-left">
                        <h6>25 of 65 Flights</h6>
                    </div>
                    <div class="filter-area">
                        <div class="price-filter filter">
                            <h5><i class="fa fa-usd"></i> Price</h5>
                            <div class="slidecontainer">
                                <input type="range" min="1" max="100" value="90" class="slider" id="myRange">
                                <p>Value: <span id="tripDur"></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="filter-area">
                        <h6>Stops</h6>
                        <ul>
                            <li>
                                <input type="checkbox">0 Stop</li>
                            <li>
                                <input type="checkbox">1 Stop</li>
                            <li>
                                <input type="checkbox">2 Stop</li>
                            <li>
                                <input type="checkbox">Above 2 Stop</li>
                        </ul>
                    </div>
                    <div class="filter-area">
                        <h6>Departure Time</h6>
                        <ul>
                            <li>
                                <input type="checkbox">Early Morning<span class="float-right">
                                      12am - 8am
                                    </span>
                            </li>
                            <li>
                                <input type="checkbox"> Morning<span class="float-right">
                                      8am - 12pm
                                    </span></li>
                            <li>
                                <input type="checkbox">Mid Day<span class="float-right">
                                      12pm - 4pm
                                    </span></li>
                            <li>
                                <input type="checkbox">Evening
                                <span class="float-right">
                                      4pm - 8pm
                                    </span></li>
                            <li>
                                <input type="checkbox">Night
                                <span class="float-right">
                                      8pm - 12am
                                    </span>
                            </li>

                        </ul>
                    </div>
                    <div class="filter-area">
                        <h6>Airlines</h6>
                        <ul>
                            <li>
                                <input type="checkbox">Show Multi-airlines itineraries
                            </li>
                            <li>
                                <input type="checkbox">Air Asia
                                <span class="float-right">
                                      ₹ 4,939
                                    </span>
                            </li>
                            <li>
                                <input type="checkbox">Air India
                                <span class="float-right">
                                      ₹ 5,515
                                    </span>
                            </li>
                            <li>
                                <input type="checkbox">Go Air
                                <span class="float-right">
                                      ₹ 5,676
                                    </span>
                            </li>
                            <li>
                                <input type="checkbox">Indigo
                                <span class="float-right">
                                        ₹ 4,976
                                    </span>
                            </li>
                            <li>
                                <input type="checkbox">SpiceJet
                                <span class="float-right">
                                        ₹ 4,939
                                    </span>
                            </li>
                            <li>
                                <input type="checkbox">Vistara
                                <span class="float-right">
                                        ₹ 5,025
                                    </span>
                            </li>
                        </ul>
                    </div>
                    <div class="filter-area">
                        <h6>Trip Duration in Hours</h6>

                        <div class="slidecontainer">
                            <input type="range" min="1" max="100" value="50" class="slider" id="myRange1">
                            <p>Value: <span id="layOver"></span></p>
                        </div>
                    </div>
                    <div class="filter-area">
                        <h6>Layover Duration in Hours</h6>
                        <div class="slidecontainer">
                            <input type="range" min="1" max="100" value="80" class="slider" id="myRangeThree">
                            <p>Value: <span id="layOver1"></span></p>
                        </div>
                    </div>
                </div>
                <!--left portion end-->
                <!--right portion start-->
                <div class="col-md-12 col-lg-9 col-xl-9 col-sm-12 mx-auto mt-3 hotel-listing">

                    <div class="row">
                        <div class="col wow zoomIn">
                            <div class="hotel-list-view">
                                <div class="row hotel-search-div">
                                    <div class="col-lg-9 col-md-9 col-12">
                                        <div class="input-group">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i><span>Search Flights:</span>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-search" aria-hidden="true"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Search for Flights, ">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-12 shortlist1">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                        <span>You Shortlist(0)</span><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="row hotel-name">
                                    <div class="col-md-2 col-lg-2 col-xl-2 col-sm-2">
                                        <a href="">
                                            Airlines
                                        </a>
                                    </div>
                                    <div class="col-md-4 col-lg-4 col-xl-4 col-sm-2">
                                        <a href="">
                                            Depart
                                        </a>
                                    </div>
                                    <div class="col-md-4 col-lg-4 col-xl-4 col-sm-2">
                                        <a href="">
                                            Duration
                                        </a>
                                    </div>
                                    <div class="col-md-2 col-lg-2 col-xl-2 col-sm-2 priceUp text-right">
                                        <a href="">
                                            Price<i class="fa fa-long-arrow-up" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="row hotel-name wow zoomIn">
                        <div class="col-12">
                            <div class="row ">
                                <div class="col-12 dealDiv">
                                    <img src="assets/images/inner/deal.png" alt="deal"><span>
                                         Get upto Rs.1500 Instant cashback.Use coupon : CT2020</span><a href="">Know More</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 col-lg-2 col-xl-2 col-sm-2 text-center">
                                    <figure>
                                        <img src="assets/images/inner/indigo.png" alt="indigo" class="img-fluid">
                                        <figcaption>IndiGo</figcaption>
                                    </figure>
                                </div>
                                <div class="col-md-4 col-lg-4 col-xl-4 col-sm-2">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 col-xl-6 col-sm-2 flightTime">
                                            <h5>02:15</h5>
                                            <h6>Del<i class="fa fa-long-arrow-right" aria-hidden="true"></i>PNQ</h6>
                                            <a href="">Flight Itinerary</a>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-xl-6 col-sm-2 flightTime">
                                            <h5>02:35</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 col-xl-4 col-sm-2 flightTime">
                                    <span class="float-right"><img src="assets/images/inner/red-eye.png" title="Red Eye Flight"></span>
                                    <h5>2h 30m</h5>
                                    <h6>Non-Stop</h6>
                                    <a href="">Baggage Information</a>
                                </div>
                                <div class="col-md-2 col-lg-2 col-xl-2 col-sm-2 text-right flightTime">
                                    <h4>₹ 4,094</h4>
                                    <a href="booking.html" class="book">Book</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <!-- END: CRUISE LIST VIEW -->
                    <!-- START: HOTEL LIST VIEW -->

                    <div class="clearfix"></div>
                    <!-- START: HOTEL LIST VIEW -->
                    <div class="row hotel-name wow zoomIn">
                        <div class="col-12">
                            <div class="row ">
                                <div class="col-12 dealDiv">
                                    <img src="assets/images/inner/deal.png" alt="deal"><span>
                                         Get upto Rs.1500 Instant cashback.Use coupon : CT2020</span><a href="">Know More</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 col-lg-2 col-xl-2 col-sm-2 text-center">
                                    <figure>
                                        <img src="assets/images/inner/goair.png" alt="goair" class="img-fluid">
                                        <figcaption>GOAir</figcaption>
                                    </figure>
                                </div>
                                <div class="col-md-4 col-lg-4 col-xl-4 col-sm-2">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 col-xl-6 col-sm-2 flightTime">
                                            <h5>03:06</h5>
                                            <h6>Del<i class="fa fa-long-arrow-right" aria-hidden="true"></i>PNQ</h6>
                                            <a href="">Flight Itinerary</a>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-xl-6 col-sm-2 flightTime">
                                            <h5>06:30</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 col-xl-4 col-sm-2 flightTime">
                                    <span class="float-right"><img src="assets/images/inner/red-eye.png" title="Red Eye Flight"></span>
                                    <h5>3h 24m</h5>
                                    <h6>Non-Stop</h6>
                                    <a href="">Baggage Information</a>
                                </div>
                                <div class="col-md-2 col-lg-2 col-xl-2 col-sm-2 text-right flightTime">
                                    <h4>₹ 4,505</h4>
                                    <a href="booking.html" class="book">Book</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <!-- START: HOTEL LIST VIEW -->
                    <div class="row hotel-name wow zoomIn">
                        <div class="col-12">
                            <div class="row ">
                                <div class="col-12 dealDiv">
                                    <img src="assets/images/inner/deal.png" alt="deal"><span>
                                         Get upto Rs.1500 Instant cashback.Use coupon : CT2020</span><a href="">Know More</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 col-lg-2 col-xl-2 col-sm-2 text-center">
                                    <figure>
                                        <img src="assets/images/inner/alliance.png" alt="alliance" class="img-fluid">
                                        <figcaption>Alliance Air</figcaption>
                                    </figure>
                                </div>
                                <div class="col-md-4 col-lg-4 col-xl-4 col-sm-2">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 col-xl-6 col-sm-2 flightTime">
                                            <h5>04:30</h5>
                                            <h6>Del<i class="fa fa-long-arrow-right" aria-hidden="true"></i>PNQ</h6>
                                            <a href="">Flight Itinerary</a>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-xl-6 col-sm-2 flightTime">
                                            <h5>08:00</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 col-xl-4 col-sm-2 flightTime">
                                    <span class="float-right"><img src="assets/images/inner/red-eye.png" title="Red Eye Flight"></span>
                                    <h5>2h 30m</h5>
                                    <h6>Non-Stop</h6>
                                    <a href="">Baggage Information</a>
                                </div>
                                <div class="col-md-2 col-lg-2 col-xl-2 col-sm-2 text-right flightTime">
                                    <h4>₹ 6,665</h4>
                                    <a href="booking.html" class="book">Book</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <!-- START: HOTEL LIST VIEW -->
                    <div class="row hotel-name wow zoomIn">
                        <div class="col-12">
                            <div class="row ">
                                <div class="col-12 dealDiv">
                                    <img src="assets/images/inner/deal.png" alt="deal"><span>
                                         Get upto Rs.1500 Instant cashback.Use coupon : CT2020</span><a href="">Know More</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 col-lg-2 col-xl-2 col-sm-2 text-center">
                                    <figure>
                                        <img src="assets/images/inner/express.png" alt="express" class="img-fluid">
                                        <figcaption>Air India Express</figcaption>
                                    </figure>
                                </div>
                                <div class="col-md-4 col-lg-4 col-xl-4 col-sm-2">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 col-xl-6 col-sm-2 flightTime">
                                            <h5>02:15</h5>
                                            <h6>Del<i class="fa fa-long-arrow-right" aria-hidden="true"></i>PNQ</h6>
                                            <a href="">Flight Itinerary</a>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-xl-6 col-sm-2 flightTime">
                                            <h5>05:40</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 col-xl-4 col-sm-2 flightTime">
                                    <span class="float-right"><img src="assets/images/inner/red-eye.png" title="Red Eye Flight"></span>
                                    <h5>1h 10m</h5>
                                    <h6>Non-Stop</h6>
                                    <a href="">Baggage Information</a>
                                </div>
                                <div class="col-md-2 col-lg-2 col-xl-2 col-sm-2 text-right flightTime">
                                    <h4>₹ 5,025</h4>
                                    <a href="booking.html" class="book">Book</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>
    <!--end Section1-->
    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Get a Cleartrip Account</h4>
                    <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <button type="button" class="registerfb" onclick="window.location.href = 'https://www.facebook.com/';"><i class="fa fa-facebook" aria-hidden="true"></i>Sign up with Facebook</button>

                    <form>
                        <div class="container">
                            <p>or, Sign up with your current email address</p>
                            <hr>
                            <label><b>Email</b></label>
                            <input type="email" class="textBox" placeholder="Enter Email" name="email" required>

                            <label><b>Password</b></label>
                            <input type="password" class="textBox" placeholder="Enter Password" name="psw" required>

                            <label><b>Repeat Password</b></label>
                            <input type="password" class="textBox" placeholder="Repeat Password" name="psw-repeat" required>
                            <hr>
                            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
                            <button type="submit" class="registerbtn">Create Account</button>
                        </div>

                        <div class="container signin">
                            <p>Already have an account? <a href="#">Sign in</a>.</p>
                        </div>
                    </form>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- The Modal -->
    <div class="modal" id="myModal1">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Sign in to Cleartrip</h4>
                    <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <button type="button" class="registerfb"><i class="fa fa-facebook" aria-hidden="true">
                        </i>Sign in with Facebook</button>
                    <form>
                        <div class="container">
                            <p>or Log in with your Cleartrip account</p>
                            <hr>
                            <label><b>Email</b></label>
                            <input type="email" class="textBox" placeholder="Enter Email" name="email" required>

                            <label><b>Password</b></label>
                            <input type="password" class="textBox" placeholder="Enter Password" name="psw" required>

                            <hr>
                            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
                            <button type="submit" class="registerbtn">Sign in</button>
                        </div>
                        <div class="container signin">
                            <p>Don’t have a Cleartrip Account? <a href="">Sign Up</a>.</p>
                        </div>
                    </form>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--start footer-->
    <footer class="page-footer font-small mdb-color pt-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-12">
                    <div class="text-center text-md-left">
                        <!--Copyright-->
                        <p class="text-md-left">© 2020 Copyright :
                            <a href="http://travjury.com">
                                <strong> Travel Agents</strong>
                            </a>Powered By Travjury
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-12 foot-social ">
                    connect
                    <a class="social-footer" href="https://www.facebook.com/travjurys" target="_blank">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a class="social-footer" href="https://twitter.com/travjuryS" target="_blank">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a class="social-footer" href="https://www.linkedin.com/company/travjury-software-pvt-ltd" target="_blank">
                        <i class="fa fa-linkedin"></i>
                    </a>
                    <a class="social-footer" href="https://in.pinterest.com/travjurysoftware/?autologin=true" target="_blank">
                        <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</section>
<!--End footer-->
<script src="js/jquery-3.4.1.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script  src="js/countries.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/validate.js"></script>
<script src="js/custom-dynamic.js"></script>
<script src="js/range.js"></script>
<script src="calenplugin/js/moment.min.js"></script>
<script src="calenplugin/js/daterangepicker.min.js"></script>
<script src="calenplugin/js/select.js"></script>
</body>
</html>
