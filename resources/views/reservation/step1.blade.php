<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Welcome to Travel Agents</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/inner/favicon.png') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('calenplugin/css/daterangepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style1.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/test.css') }}">
</head>

<body>
<!--start Header-->
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

<ol style="--length: 5" role="list" id="form-steps">
    <!-- Step 1: Choose Class -->
    <li style="--i: 1" class="active">
        <h3>Informations sur le vol:</h3>
        <form action="{{ route('reservation.processStep1') }}" method="POST">
            @csrf
        <div>
            <p><strong>Numéro du vol :</strong> {{ $flight->flight_number }}</p><br>
            <p><strong>Aéroport de départ :</strong> {{ $flight->departureAirport->name }}</p><br>
            <p><strong>Aéroport d'arrivée :</strong> {{ $flight->arrivalAirport->name }}</p><br>
            <p><strong>Heure de départ :</strong> {{ $flight->departure_time }}</p><br>
            <p><strong>Heure d'arrivée :</strong> {{ $flight->arrival_time }}</p><br>
            <p><strong>Heure d'arrivée :</strong> {{ $flight->price }}$</p><br>
        </div>

            <div class="form-group">
        <form action="{{ route('reservation.processStep1') }}" method="POST">
            @csrf
            <input type="hidden" name="flight_id" value="{{ $flight->id }}">

            <label for="passenger_count">Nombre de passagers:</label>
            <select id="passenger_count" name="passenger_count" class="form-group" required>
                @for ($i = 1; $i <= 10; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select><br><br>
            <button type="submit" class="btn btn-primary">Suivant</button>
        </form>
            </div>
        </form>
    </li>

</ol>

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
    </div>
</footer>
<!--end footer-->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>
</html>

