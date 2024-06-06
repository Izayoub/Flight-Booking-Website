<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Edit Flight</title>
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
                    <h1>Modifier le vol</h1>
                    <form action="{{ route('flights.update', $flight->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="flight_number">Numéro du vol</label>
                            <input type="text" class="form-control" id="flight_number" name="flight_number" value="{{ $flight->flight_number }}" required>
                        </div>
                        <div class="form-group">
                            <label for="departure_airport_id">Aéroport de départ</label>
                            <select class="form-control" id="departure_airport_id" name="departure_airport_id" required>
                                @foreach($airports as $airport)
                                    <option value="{{ $airport->id }}" {{ $flight->departure_airport_id == $airport->id ? 'selected' : '' }}>{{ $airport->name }} ({{ $airport->iata_code }})</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="arrival_airport_id">Aéroport d'arrivée</label>
                            <select class="form-control" id="arrival_airport_id" name="arrival_airport_id" required>
                                @foreach($airports as $airport)
                                    <option value="{{ $airport->id }}" {{ $flight->arrival_airport_id == $airport->id ? 'selected' : '' }}>{{ $airport->name }} ({{ $airport->iata_code }})</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="departure_time">Heure de départ</label>
                            <input type="datetime-local" class="form-control" id="departure_time" name="departure_time" value="{{ $flight->departure_time }}" required>
                        </div>
                        <div class="form-group">
                            <label for="arrival_time">Heure d'arrivée</label>
                            <input type="datetime-local" class="form-control" id="arrival_time" name="arrival_time" value="{{ $flight->arrival_time }}" required>
                        </div>
                        <div class="form-group">
                            <label for="price">Prix</label>
                            <input type="number" class="form-control" id="price" name="price" value="{{ $flight->price }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                        <a href="{{ route('flights.redirect') }}" class="btn btn-secondary">Annuler</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!--end footer-->
</body>
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
</html>
