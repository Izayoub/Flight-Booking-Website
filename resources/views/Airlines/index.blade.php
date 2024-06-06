@extends('landing_page.offers_layout')

@section('content')
    <div class="container">
        <h1>Airlines</h1>
        <a href="{{ route('airlines.create') }}" class="btn btn-primary">Add Airline</a>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>IATA Code</th>
                <th>Logo</th>

            </tr>
            </thead>
            <tbody>
            @foreach($airlines as $airline)
                <tr>
                    <td>{{ $airline->id }}</td>
                    <td>{{ $airline->name }}</td>
                    <td>{{ $airline->iata_code }}</td>
                    <td> <img src="{{ asset('imagesAirline/' . $airline->logo) }}"   class="img-fluid" style="width: 70px; height: auto;"></td>

                    <td>
                        <a href="{{route('airlines.show', $airline->id)}}" class="btn btn-info">Show</a>
                        <a href="{{route('airlines.edit', $airline->id)}}" class="btn btn-warning">Edit</a>
                        <form action="{{route('airlines.destroy', $airline->id)}}" method="POST" style="display:inline;">
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
