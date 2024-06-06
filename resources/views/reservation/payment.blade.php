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
    <li style="--i: 7" class="active">
        <h1>Paiement:</h1>
    <script src="https://js.stripe.com/v3/"></script>

    <div class="container">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">

                        <div class="card-body">
                            <form id="payment-form">
                                <div class="form-group">
                                    <label for="card-element">Carte de crédit</label>
                                    <div id="card-element" class="form-control">
                                        <!-- Stripe's Card Element will be inserted here -->
                                    </div>
                                </div>
                                <div id="card-errors" role="alert"></div><br>
                                <button id="submit" class="btn btn-primary">Payer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            var stripe = Stripe('{{ env('STRIPE_KEY') }}');
            var elements = stripe.elements();
            var cardElement = elements.create('card');
            cardElement.mount('#card-element');

            var form = document.getElementById('payment-form');
            var submitButton = document.getElementById('submit');
            var errorElement = document.getElementById('card-errors');

            form.addEventListener('submit', function(event) {
                event.preventDefault();
                submitButton.disabled = true;

                stripe.createPaymentMethod('card', cardElement).then(function(result) {
                    if (result.error) {
                        errorElement.textContent = result.error.message;
                        submitButton.disabled = false;
                    } else {
                        // On successful creation of PaymentMethod, confirm the PaymentIntent
                        stripe.confirmCardPayment('{{ $clientSecret }}', {
                            payment_method: result.paymentMethod.id
                        }).then(function(confirmResult) {
                            if (confirmResult.error) {
                                // Display error message if payment fails
                                errorElement.textContent = confirmResult.error.message;
                                submitButton.disabled = false;
                            } else {
                                // Payment successful, redirect to success page
                                if (confirmResult.paymentIntent.status === 'succeeded') {
                                    alert('Paiement réussi!');
                                    window.location.href = "{{ route('reservation.success') }}";
                                }
                            }
                        });
                    }
                });
            });
        </script>
    </div>
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

