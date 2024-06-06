<!-- resources/views/reservation/step4.blade.php -->
@extends('landing_page.offers_layout')

@section('content')
    <div class="container">
        <h1>Étape 4: Récapitulatif et paiement</h1>
        <h2>Récapitulatif de la réservation</h2>
        <ul>
            <li>Numéro de vol: {{ $flight->flight_number }}</li>
            <li>Classe: {{ $data['class'] ?? 'N/A' }}</li>
            <li>Bagages: {{ $data['baggage'] ?? 'N/A' }}</li>
            <li>Siège: {{ $data['seat'] ?? 'N/A' }}</li>
        </ul>
        <form action="{{ route('reservation.postStep4', $flight->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="payment">Méthode de paiement</label>
                <select name="payment" id="payment" class="form-control" required>
                    <option value="credit_card">Carte de crédit</option>
                    <option value="paypal">PayPal</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Payer et réserver</button>
        </form>
    </div>
@endsection
