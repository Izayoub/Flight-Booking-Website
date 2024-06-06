<!-- resources/views/reservation/complete.blade.php -->
@extends('landing_page.offers_layout')

@section('content')
    <div class="container">
        <h1>Réservation pour le vol {{ $flight->flight_number }}</h1>
        <p>De {{ $flight->departureAirport }} à {{ $flight->arrivalAirport }}</p>
        <p>Heure de départ : {{ $flight->departure_time }}</p>
        <p>Heure d'arrivée : {{ $flight->arrival_time }}</p>

        <form action="{{ route('reservation.complete', ['flight' => $flight->id]) }}" method="POST">
            @csrf

            <!-- Step 1: Choose Class -->
            <fieldset>
                <legend>Étape 1: Choisissez une classe</legend>
                <div class="form-group">
                    <label for="class">Classe</label>
                    <select id="class" name="class" class="form-control" required>
                        <option value="economy">Économique</option>
                        <option value="business">Affaires</option>
                        <option value="first">Première</option>
                    </select>
                </div>
            </fieldset>

            <!-- Step 2: Choose Baggage -->
            <fieldset>
                <legend>Étape 2: Choix des bagages</legend>
                <div class="form-group">
                    <label for="baggage">Bagages</label>
                    <select name="baggage" id="baggage" class="form-control" required>
                        <option value="none">Aucun</option>
                        <option value="standard">Standard (23kg)</option>
                        <option value="extra">Extra (32kg)</option>
                    </select>
                </div>
            </fieldset>

            <!-- Step 3: Choose Seat -->
            <fieldset>
                <legend>Étape 3: Choix des sièges</legend>
                <div class="form-group">
                    <label for="seat">Sièges</label>
                    <select name="seat" id="seat" class="form-control" required>
                        <option value="window">Fenêtre</option>
                        <option value="aisle">Allée</option>
                        <option value="middle">Milieu</option>
                    </select>
                </div>
            </fieldset>

            <!-- Step 4: Payment and Summary -->
            <fieldset>
                <legend>Étape 4: Récapitulatif et paiement</legend>
                <h2>Récapitulatif de la réservation</h2>
                <ul>
                    <li>Numéro de vol: {{ $flight->flight_number }}</li>
                    <li>Classe: {{ old('class') ?? 'N/A' }}</li>
                    <li>Bagages: {{ old('baggage') ?? 'N/A' }}</li>
                    <li>Siège: {{ old('seat') ?? 'N/A' }}</li>
                </ul>
                <div class="form-group">
                    <label for="payment">Méthode de paiement</label>
                    <select name="payment" id="payment" class="form-control" required>
                        <option value="credit_card">Carte de crédit</option>
                        <option value="paypal">PayPal</option>
                    </select>
                </div>
            </fieldset><br>

            <button type="submit" class="btn btn-success">Payer et réserver</button>
        </form>
    </div>
@endsection
