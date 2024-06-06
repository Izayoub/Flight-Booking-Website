<!-- resources/views/flights/index.blade.php -->
@extends('landing_page.layout')

@section('content')
    <div class="container">
        <h1>Rechercher des Vols</h1>

        <form action="{{ route('flights.search') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="departure_date">Date de départ</label>
                <input type="date" name="departure_date" id="departure_date" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="departure_airport">Aéroport de départ</label>
                <select name="departure_airport" id="departure_airport" class="form-control" required>
                    @foreach(App\Models\Airport::all() as $airport)
                        <option value="{{ $airport->id }}">{{ $airport->name }} ({{ $airport->iata_code }})</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="arrival_airport">Aéroport d'arrivée</label>
                <select name="arrival_airport" id="arrival_airport" class="form-control" required>
                    @foreach(App\Models\Airport::all() as $airport)
                        <option value="{{ $airport->id }}">{{ $airport->name }} ({{ $airport->iata_code }})</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Rechercher</button>
        </form>

        @if(isset($flights))
            <h2 class="mt-5">Vols disponibles</h2>
            @if($flights->isEmpty())
                <p>Aucun vol trouvé pour les critères de recherche.</p>
            @else
                <table class="table">
                    <thead>
                    <tr>
                        <th>Numéro de vol</th>
                        <th>Départ</th>
                        <th>Arrivée</th>
                        <th>Heure de départ</th>
                        <th>Heure d'arrivée</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($flights as $flight)
                        <tr>
                            <td>{{ $flight->flight_number }}</td>
                            <td>{{ $flight->departureAirport->name }} ({{ $flight->departureAirport->iata_code }})</td>
                            <td>{{ $flight->arrivalAirport->name }} ({{ $flight->arrivalAirport->iata_code }})</td>
                            <td>{{ $flight->departure_time }}</td>
                            <td>{{ $flight->arrival_time }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        @endif

    </div>
@endsection
