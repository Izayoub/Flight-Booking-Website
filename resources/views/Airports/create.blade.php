@extends('landing_page.offers_layout')

@section('content')
    <div class="container">
        <h1>Create Airport</h1>
        <form action="{{ route('airports.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="iata_code">IATA Code</label>
                <input type="text" class="form-control" id="iata_code" name="iata_code" required>
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="longitude">Longitude</label>
                <input type="text" class="form-control" id="longitude" name="longitude" required>
            </div>
            <div class="form-group">
                <label for="latitude">Latitude</label>
                <input type="text" class="form-control" id="latitude" name="latitude" required>
            </div><br>
            <button type="submit" class="btn btn-primary">Create</button>
            <a href="{{ route('airports.index') }}" class="btn btn-secondary">Back</a>

        </form>
    </div>
@endsection
