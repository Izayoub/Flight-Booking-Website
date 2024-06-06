@extends('landing_page.offers_layout')

@section('content')
    <div class="container">
        <h1>Airports</h1>
        <a href="{{ route('airports.create') }}" class="btn btn-primary">Create Airport</a>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>IATA Code</th>
                <th>Name</th>
                <th>Longitude</th>
                <th>Latitude</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($airports as $airport)
                <tr>
                    <td>{{ $airport->id }}</td>
                    <td>{{ $airport->iata_code }}</td>
                    <td>{{ $airport->name }}</td>
                    <td>{{ $airport->longitude }}</td>
                    <td>{{ $airport->latitude }}</td>
                    <td>
                        <a href="{{ route('airports.show', $airport->id) }}" class="btn btn-info">Show</a>
                        <a href="{{ route('airports.edit', $airport->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('airports.destroy', $airport->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{ url('/admins') }}" class="btn btn-secondary">Back</a>

    </div>

@endsection
