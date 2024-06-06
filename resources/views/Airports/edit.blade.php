@extends('landing_page.offers_layout')

@section('content')
    <div class="container">
        <h1>Edit Airport</h1>
        <form action="{{ route('airports.update', $airport->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="iata_code">IATA Code</label>
                <input type="text" class="form-control" id="iata_code" name="iata_code" value="{{ $airport->iata_code }}" required>
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $airport->name }}" required>
            </div>
            <div class="form-group">
                <label for="longitude">Longitude</label>
                <input type="text" class="form-control" id="longitude" name="longitude" value="{{ $airport->longitude }}" required>
            </div>
            <div class="form-group">
                <label for="latitude">Latitude</label>
                <input type="text" class="form-control" id="latitude" name="latitude" value="{{ $airport->latitude }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
