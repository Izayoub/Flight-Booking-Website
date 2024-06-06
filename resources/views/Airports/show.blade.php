@extends('landing_page.offers_layout')

@section('content')
    <div class="container">
        <h1>Airport Details</h1>
        <p><strong>ID:</strong> {{ $airport->id }}</p>
        <p><strong>IATA Code:</strong> {{ $airport->iata_code }}</p>
        <p><strong>Name:</strong> {{ $airport->name }}</p>
        <p><strong>Longitude:</strong> {{ $airport->longitude }}</p>
        <p><strong>Latitude:</strong> {{ $airport->latitude }}</p>
        <a href="{{ route('airlines.index') }}" class="btn btn-primary">Back to List</a>
    </div>
@endsection
