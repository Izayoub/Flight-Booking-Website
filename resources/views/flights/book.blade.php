<!-- resources/views/flights/book.blade.php -->

@extends('landing_page.offers_layout')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto mt-3">
                    <h1>Réserver le vol</h1>
                    <table class="table table-striped">
                        <tbody>
                        <tr>
                            <th>Numéro de vol</th>
                            <td>{{ $flight->flight_number }}</td>
                        </tr>
                        <tr>
                            <th>Compagnie aérienne</th>
                            <td>Ryanair</td>
                        </tr>
                        <tr>
                            <th>Aéroport de départ</th>
                            <td>{{ $flight->departureAirport->name }}</td>
                        </tr>
                        <tr>
                            <th>Heure de départ</th>
                            <td>{{ $flight->departure_time }}</td>
                        </tr>
                        <tr>
                            <th>Aéroport d'arrivée</th>
                            <td>{{ $flight->arrivalAirport->name }}</td>
                        </tr>
                        <tr>
                            <th>Heure d'arrivée</th>
                            <td>{{ $flight->arrival_time }}</td>
                        </tr>
                        </tbody>
                    </table>
                    <!-- Formulaire de réservation -->
                    <form action="{{ route('flights.handleBook', $flight->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-success">Réserver ce vol</button>
                    </form>
                    <!-- Bouton pour revenir à la liste des vols -->
                    <a href="{{ route('flights') }}" class="btn btn-primary mt-2">Retour à la liste des vols</a>
                </div>
            </div>
        </div>
    </section>
@endsection
