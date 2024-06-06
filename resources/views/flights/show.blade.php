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
    <link rel="stylesheet" type="text/css" href="{{asset('calenplugin/css/daterangepicker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}" />
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet"/>

    <link rel="stylesheet" href="{{asset('css/styles.css')}}"/>

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
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto mt-3">
                    <div class="flight-details">
                        <h1>Détails du vol</h1>
                        <div class="row">
                            <div class="col-md-6">
                                <h2>Informations sur le vol</h2>
                                <p><strong>Numéro du vol :</strong> {{ $flight->flight_number }}</p>
                                <p><strong>Compagnie aérienne :</strong> {{ $flight->airline->name }}</p>
                                <p><strong>Aéroport de départ :</strong> {{ $flight->departureAirport->name }} ({{ $flight->departureAirport->iata_code }})</p>
                                <p><strong>Heure de départ :</strong> {{ $flight->departure_time }}</p>
                                <p><strong>Aéroport d'arrivée :</strong> {{ $flight->arrivalAirport->name }} ({{ $flight->arrivalAirport->iata_code }})</p>
                                <p><strong>Heure d'arrivée :</strong> {{ $flight->arrival_time }}</p>
                                <p><strong>Durée du vol :</strong> {{ $flight->duration }} heures</p>
                                <p><strong>Prix :</strong> {{ $flight->price }} $</p>
                            </div>
                            <div class="col-md-6">
                                <h2>Autres détails</h2>
                                <p><strong>Type d'avion :</strong> Boeing</p>
                                <p><strong>Classe de service :</strong> First</p>
                                <p><strong>Escales :</strong> 0</p>

                            </div>
                        </div>
                        <a href="{{ route('flights.index') }}" class="btn btn-primary">Retour à la liste des vols</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<footer class="page-footer font-small mdb-color pt-2">
<div class="container">
    <div class="row">
        <div class="col-lg-9 col-md-8 col-12">
            <div class="text-center text-md-left">
                <p class="text-md-left">© 2020 Copyright :
                    <a href="http://travjury.com">
                        <strong> Travel Agents</strong>
                    </a>Powered By Travjury
                </p>
            </div>
        </div>
    </div>
</div>
</footer>
<!--end footer-->
</body>
</html>
