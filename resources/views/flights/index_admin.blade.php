<!-- resources/views/flights/index.blade.php -->
@extends('landing_page.offers_layout')

@section('content')
    <div class="container">
        <h1>Flights</h1>
        <a href="{{ route('flights.create_admin') }}" class="btn btn-primary">Create Flight</a>
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Flight Number</th>
                <th>Departure</th>
                <th>Arrival</th>
                <th>Departure Time</th>
                <th>Arrival Time</th>
                <th>Price</th>
                <th>Actions</th>

            </tr>
            </thead>
            <tbody>
            @foreach($flights as $flight)
                <tr>
                    <td>{{ $flight->id }}</td>
                    <td>{{ $flight->flight_number }}</td>
                    <td>{{ $flight->departureAirport->iata_code }}</td>
                    <td>{{ $flight->arrivalAirport->iata_code}}</td>
                    <td>{{ $flight->departure_time }}</td>
                    <td>{{ $flight->arrival_time }}</td>
                    <td>{{ $flight->price }}</td>
                    <td>
                        <a href="{{ route('flights.show_admin', $flight->id) }}" class="btn btn-info">Show</a>
                        <a href="{{ route('flights.edit_admin', $flight->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('flights.destroy', $flight->id) }}" method="POST" style="display:inline;">
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
