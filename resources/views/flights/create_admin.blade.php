@extends('landing_page.offers_layout')

@section('content')
<section>
    <div class="container">
        <div class="row">
            <h1>Créer un vol</h1>
            <div class="col-md-12 mx-auto mt-3">
                <div class="flight-details">

                    <form action="{{ route('flights.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="flight_number">Numéro du vol</label>
                            <input type="text" class="form-control" id="flight_number" name="flight_number" required>
                        </div>
                        <div class="form-group">
                            <label for="departure_airport_id">Aéroport de départ</label>
                            <select class="form-control" id="departure_airport_id" name="departure_airport_id" required>
                                <option value="">Sélectionner un aéroport de départ</option>
                                @foreach($airports as $airport)
                                    <option value="{{ $airport->id }}">{{ $airport->name }} ({{ $airport->iata_code }})</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="arrival_airport_id">Aéroport d'arrivée</label>
                            <select class="form-control" id="arrival_airport_id" name="arrival_airport_id" required>
                                <option value="">Sélectionner un aéroport d'arrivée</option>
                                @foreach($airports as $airport)
                                    <option value="{{ $airport->id }}">{{ $airport->name }} ({{ $airport->iata_code }})</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="departure_time">Heure de départ</label>
                            <input type="datetime-local" class="form-control" id="departure_time" name="departure_time" required>
                        </div>
                        <div class="form-group">
                            <label for="arrival_time">Heure d'arrivée</label>
                            <input type="datetime-local" class="form-control" id="arrival_time" name="arrival_time" required>
                        </div>
                        <div class="form-group">
                            <label for="price">Prix</label>
                            <input type="number" class="form-control" id="price" name="price" required>
                        </div>
                        <div class="form-group">
                            <label for="id_airline">Airline</label>
                            <select class="form-control" id="id_airline" name="id_airline" required>
                                <option value="">Sélectionner une compagnie aérienne</option>
                                @foreach($airlines as $airline)
                                    <option value="{{ $airline->id }}">{{ $airline->name }} ({{ $airline->iata_code }})</option>
                                @endforeach
                            </select>P°°
                        </div><br>
                        <button type="submit" class="btn btn-primary">Créer le vol</button>
                        <a href="{{ route('flights.redirect') }}" class="btn btn-secondary">Annuler</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

