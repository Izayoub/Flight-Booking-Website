@extends('landing_page.offers_layout')

@section('content')
    <div class="container">
        <h1>Airline Details</h1>
        <p><strong>ID:</strong> {{ $airline->id }}</p>
        <p><strong>IATA Code:</strong> {{ $airline->iata_code }}</p>
        <p><strong>Name:</strong> {{ $airline->name }}</p>
        <p><strong>Logo:</strong><img src="{{ asset('imagesAirline/' . $airline->logo) }}"   class="img-fluid" style="width: 70px; height: auto;"></p>
        <a href="{{ route('airlines.index') }}" class="btn btn-primary">Back to List</a>
    </div>
@endsection
