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
        <li class="link active"><a href="{{ url('/offers') }}">Offers</a></li>
        <li class="link"><a href="#">Seats</a></li>
        <li class="link"><a href="#">Destinations</a></li>
    </ul>
    <button class="btn">Contact</button>
</nav>

<ol style="--length: 5" role="list" id="form-steps">
    <!-- Step 2: Passenger Details -->
    <li style="--i: 3" class="active">
        <div id="recap-div">
            <h1>Récapitulatif des informations de réservation :</h1><br>
            <p><strong>Classe sélectionnée :</strong> {{ $selectedClass }}</p><br>
            <p><strong>Bagages sélectionnés :</strong> {{ $selectedBaggage }}</p><br>
            <p><strong>Nombre de passagers :</strong> {{ $passengerCount }}</p><br>
            <p><strong>Prix du vol :</strong> 299 $</p><br>

        </div>

        <form method="POST" action="{{ route('reservation.processPayment') }}">
            @csrf
            <div class="form-group">
                <label for="payment">Méthode de paiement:</label><br>
                <select name="payment" id="payment" class="form-control" required>
                    <option value="credit_card">Carte de crédit</option>
                    <option value="paypal">PayPal</option>
                </select>
            </div>
            <br>
            <button type="submit" class="btn btn-success">Buy</button>
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
</footer>
<!--end footer-->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>
</html>