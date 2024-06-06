@extends('landing_page.offers_layout')

@section('content')
    <div class="container">
        <h1>Create Airline</h1>
        <form action="{{ route('airlines.store') }}" method="POST">
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
                <label for="name">Logo</label><br>
                <input type="file" class="form-control-file" id="logo" name="logo" required><br>
            </div><br>

            <button type="submit" class="btn btn-primary">Create</button>
            <a href="{{ route('airlines.index') }}" class="btn btn-secondary">Back</a>

        </form>

    </div>
@endsection
