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
    <!-- Step 1: Choose Class -->
    <li style="--i: 1" class="active">
        <h3>Choisissez une classe</h3>
        <form action="{{ route('reservation.processForm') }}" method="POST" id="step1-form">
            @csrf
            <input type="hidden" name="flight_id" value="{{ $flight->id }}">

            <div>
                <h4>Informations sur le vol :</h4>
                <p><strong>Numero du vol :</strong> {{ $flight->flight_number }}</p>
                <p><strong>Aéroport de départ :</strong> {{ $flight->departureAirport->name }}</p>
                <p><strong>Aéroport d'arrivée :</strong> {{ $flight->arrivalAirport->name }}</p>
                <p><strong>Heure de départ :</strong> {{ $flight->departure_time }}</p>
                <p><strong>Heure d'arrivée :</strong> {{ $flight->arrival_time }}</p>
            </div>

            <div class="form-group">
                <label for="passenger_count">Nombre de passagers</label>
                <select id="passenger_count" name="passenger_count" class="form-control" required>
                    @for ($i = 1; $i <= 10; $i++)
                        <option value="{{ $i }}" >{{ $i }}</option>
                    @endfor
                </select>
            </div><br>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </li>

    <!-- Step 2: Passenger Details -->
    <li style="--i: 2">
        <h3>Détails des passagers pour le vol {{ $flight->flight_number }}</h3>
        <form action="{{ route('reservation.processForm') }}" method="POST" id="passenger-forms">
            @csrf
            <input type="hidden" name="flight_id" value="{{ $flight->id }}">

            <button type="submit" class="btn btn-success">Save</button>
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
<script>
    $(document).ready(function() {
        $('#passenger_count').change(function() {
            var passengerCount = $(this).val();
            var passengerForms = $('#passenger-forms');
            passengerForms.empty();

            for (var i = 1; i <= passengerCount; i++) {
                var formHtml = `

                    <fieldset>
                        <legend>Passager ${i}</legend>
                        <div class="form-group">
                            <label for="firstname_${i}">Prénom</label>
                            <input type="text" id="firstname_${i}" name="passengers[${i}][firstname]" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="lastname_${i}">Nom</label>
                            <input type="text" id="lastname_${i}" name="passengers[${i}][lastname]" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email_${i}">Email</label>
                            <input type="email" id="email_${i}" name="passengers[${i}][email]" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="phone_${i}">Numéro de téléphone</label>
                            <input type="tel" id="phone_${i}" name="passengers[${i}][phone]" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="class_${i}">Classe</label>
                            <select id="class_${i}" name="passengers[${i}][class]" class="form-control" required>
                                <option value="economy">Économique</option>
                                <option value="business">Affaires</option>
                                <option value="first">Première</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="baggage_${i}">Bagages</label>
                            <select id="baggage_${i}" name="passengers[${i}][baggage]" class="form-control" required>
                                <option value="none">Aucun</option>
                                <option value="standard">Standard (23kg)</option>
                                <option value="extra">Extra (32kg)</option>
                            </select>
                        </div>
                    </fieldset>
                    <hr>
 <button type="submit" class="btn btn-success">Save</button>
                `;
                passengerForms.append(formHtml);
            }
        });

        $('#step1-form').submit(function(e) {
            e.preventDefault();
            var form = $(this);
            var url = form.attr('action');
            $.ajax({
                type: "POST",
                url: url,
                data: form.serialize(),
                success: function(data) {
                    $('#form-steps li').removeClass('active');
                    $('#form-steps li').eq(1).addClass('active');
                }
            });
        });

        $('#step2-form').submit(function(e) {
            e.preventDefault();
            var form = $(this);
            var url = form.attr('action');
            $.ajax({
                type: "POST",
                url: url,
                data: form.serialize(),
                success: function(data) {
                    $('#form-steps li').removeClass('active');
                    $('#form-steps li').eq(2).addClass('active');
                    $('#selected-class').text(data.selectedClass);
                    $('#selected-baggage').text(data.selectedBaggage);
                    $('#selected-passenger-count').text(data.passengerCount);
                }
            });
        });
    });
</script>
</body>
</html>

