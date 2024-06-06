@extends('landing_page.offers_layout')

@section('content')
    <div class="container">
        <h1>Flights Available</h1>

        @if ($flights->isEmpty())
            <p>No flights available for the selected criteria.</p>
        @else
            <section class="loader" style="display: none;">
                <section id="section-hotel">
                    <div class="container"></div>
                </section>
            </section>

            <!--section-->
            <section>
                <div class="container">
                    <div class="row">
                        <!--left portion start-->
                        <div class="col-md-12 col-lg-3 col-xl-3 col-xs-12 mx-auto mt-3">
                            <div class="filter-head text-left">
                                <h6 id="flights-count">25 of 65 Flights</h6>
                            </div>
                            <div class="filter-area">
                                <div class="price-filter filter">
                                    <h5><i class="fa fa-usd"></i> Price</h5>
                                    <div class="slidecontainer">
                                        <input type="range" min="1" max="1000" value="90" class="slider" id="myRange">
                                        <p>Value: <span id="tripDur"></span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="filter-area">
                                <h6>Stops</h6>
                                <ul>
                                    <li><input type="checkbox"> 0 Stop</li>
                                    <li><input type="checkbox"> 1 Stop</li>
                                    <li><input type="checkbox"> 2 Stops</li>
                                    <li><input type="checkbox"> Above 2 Stops</li>
                                </ul>
                            </div>
                            <div class="filter-area">
                                <h6>Departure Time</h6>
                                <ul>
                                    <li><input type="checkbox"> Early Morning <span class="float-right">12am - 8am</span></li>
                                    <li><input type="checkbox"> Morning <span class="float-right">8am - 12pm</span></li>
                                    <li><input type="checkbox"> Mid Day <span class="float-right">12pm - 4pm</span></li>
                                    <li><input type="checkbox"> Evening <span class="float-right">4pm - 8pm</span></li>
                                    <li><input type="checkbox"> Night <span class="float-right">8pm - 12am</span></li>
                                </ul>
                            </div>
                            <div class="filter-area">
                                <h6>Airlines</h6>
                                <ul>
                                    <li><input type="checkbox"> Show Multi-airlines itineraries</li>
                                    <li><input type="checkbox"> Air Asia <span class="float-right">₹ 4,939</span></li>
                                    <li><input type="checkbox"> Air India <span class="float-right">₹ 5,515</span></li>
                                    <li><input type="checkbox"> Go Air <span class="float-right">₹ 5,676</span></li>
                                    <li><input type="checkbox"> Indigo <span class="float-right">₹ 4,976</span></li>
                                    <li><input type="checkbox"> SpiceJet <span class="float-right">₹ 4,939</span></li>
                                    <li><input type="checkbox"> Vistara <span class="float-right">₹ 5,025</span></li>
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
                                                    <input type="text" class="form-control" placeholder="Search for Flights">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-12 shortlist1">
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                <span>You Shortlist (0)</span><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
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
                                    @foreach($flights as $flight)
                                        <div class="flight-container">
                                            <div class="row">
                                                <div class="col-12 dealDiv">
                                                    <span>Get upto Rs.1500 Instant cashback. Use coupon: CT2020</span><a href="">Know More</a>
                                                </div>
                                            </div>
                                            <div class="row flight-details">
                                                <div class="col-md-2 col-lg-2 col-xl-2 col-sm-2 text-center">
                                                    <figure>
                                                        <!-- Affichage du logo de la compagnie aérienne -->
                                                        <img src="{{ asset('imagesAirline/' . $flight->airline->logo) }}" alt="{{ $flight->airline->name }}" class="img-fluid">
                                                        <figcaption>{{ $flight->airline->name }}</figcaption>
                                                    </figure>
                                                </div>
                                                <div class="col-md-4 col-lg-4 col-xl-4 col-sm-2">
                                                    <div class="row">
                                                        <div class="col-md-6 col-lg-6 col-xl-6 col-sm-2 flightTime">
                                                            <h5>{{ $flight->departure_time }}</h5>
                                                            <h6>{{ $flight->departureAirport->iata_code }}<i class="fa fa-long-arrow-right" aria-hidden="true"></i>{{ $flight->arrivalAirport->iata_code }}</h6>
                                                            <a href="">Flight Itinerary</a>
                                                        </div>
                                                        <div class="col-md-6 col-lg-6 col-xl-6 col-sm-2 flightTime">
                                                            <h5>{{ $flight->arrival_time }}</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-lg-4 col-xl-4 col-sm-2 flightTime">
                                                    <span class="float-right"><img src="assets_flight/images/inner/red-eye.png" title="Red Eye Flight"></span>
                                                    <h5>{{ $flight->duration }} h</h5>
                                                    <h6>Non-Stop</h6>
                                                    <a href="">Baggage Information</a>
                                                </div>
                                                <div class="col-md-2 col-lg-2 col-xl-2col-sm-2 text-right flightTime">
                                                    <h4>{{ $flight->price }} $</h4>
                                                    <a href="{{ route('reservation.step1', $flight->id) }}" class="book">Book</a>
                                                    <a href="{{ route('flights.show', $flight->id) }}" class="book">Flight Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!--right portion end-->
                    </div>
                </div>
            </section>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const flights = @json($flights); // Convert Laravel collection to JavaScript array
                    const flightsContainer = document.querySelector('.hotel-listing .row');
                    const flightsCount = document.getElementById('flights-count');
                    const priceSlider = document.getElementById('myRange');
                    const priceValue = document.getElementById('tripDur');
                    const timeCheckboxes = document.querySelectorAll('.filter-area ul li input[type="checkbox"]');                // Function to update price value display
                    function updatePriceValue() {
                        priceValue.textContent = priceSlider.value;
                    }

                    function filterFlights() {
                        let filteredFlights = flights;

                        // Filter by price
                        const maxPrice = parseInt(priceSlider.value);
                        filteredFlights = filteredFlights.filter(flight => flight.price <= maxPrice);

                        // Filter by departure time
                        const selectedTimes = Array.from(timeCheckboxes)
                            .filter(checkbox => checkbox.checked)
                            .map(checkbox => checkbox.nextSibling.textContent.trim());

                        if (selectedTimes.length > 0) {
                            filteredFlights = filteredFlights.filter(flight => {
                                const departureHour = new Date(flight.departure_time).getHours();
                                if (selectedTimes.includes('Early Morning') && departureHour >= 0 && departureHour < 8) return true;
                                if (selectedTimes.includes('Morning') && departureHour >= 8 && departureHour < 12) return true;
                                if (selectedTimes.includes('Mid Day') && departureHour >= 12 && departureHour < 16) return true;
                                if (selectedTimes.includes('Evening') && departureHour >= 16 && departureHour < 20) return true;
                                if (selectedTimes.includes('Night') && departureHour >= 20 && departureHour < 24) return true;
                                return false;
                            });
                        }

                        // Update flights count
                        flightsCount.textContent = `${filteredFlights.length} of ${flights.length} Flights`;

                        // Render filtered flights
                        renderFlights(filteredFlights);
                    }

                    function renderFlights(filteredFlights) {
                        flightsContainer.innerHTML = '';  // Clear current flights

                        filteredFlights.forEach(flight => {
                            const flightHtml = `
                            <div class="col-12">
                                <div class="flight-container">
                                    <div class="row">
                                        <div class="col-12 dealDiv">
                                            <span>Get upto Rs.1500 Instant cashback. Use coupon: CT2020</span><a href="">Know More</a>
                                        </div>
                                    </div>
                                    <div class="row flight-details">
                                        <div class="col-md-2 col-lg-2 col-xl-2 col-sm-2 text-center">
                                            <figure></figure>
                                        </div>
                                        <div class="col-md-4 col-lg-4 col-xl-4 col-sm-2">
                                            <div class="row">
                                                <div class="col-md-6 col-lg-6 col-xl-6 col-sm-2 flightTime">
                                                    <h5>${flight.departure_time}</h5>
                                                    <h6>${flight.departureAirport.iata_code}<i class="fa fa-long-arrow-right" aria-hidden="true"></i>${flight.arrivalAirport.iata_code}</h6>
                                                    <a href="">Flight Itinerary</a>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-xl-6 col-sm-2 flightTime">
                                                    <h5>${flight.arrival_time}</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-lg-4 col-xl-4 col-sm-2 flightTime">
                                            <span class="float-right"><img src="assets/images/inner/red-eye.png" title="Red Eye Flight"></span>
                                            <h5>${flight.duration} h</h5>
                                            <h6>Non-Stop</h6>
                                            <a href="">Baggage Information</a>
                                        </div>
                                        <div class="col-md-2 col-lg-2 col-xl-2 col-sm-2 text-right flightTime">
                                            <h4>${flight.price} $</h4>
                                            <a href="/reservation/${flight.id}/step1" class="book">Book</a>
                                            <a href="/flights/${flight.id}" class="book">Flight Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `;
                            flightsContainer.insertAdjacentHTML('beforeend', flightHtml);
                        });
                    }

                    // Initial render
                    updatePriceValue();
                    filterFlights();

                    // Event listeners
                    priceSlider.addEventListener('input', function() {
                        updatePriceValue();
                        filterFlights();
                    });
                    timeCheckboxes.forEach(checkbox => checkbox.addEventListener('change', filterFlights));
                });
            </script>
            <!--section end-->
        @endif
    </div>
@endsection

