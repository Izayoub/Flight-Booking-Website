@extends('landing_page.offers_layout')

@section('content')
    <div class="container">
        <h1>Edit Airline</h1>
        <form action="{{ route('airlines.update', $airline->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="iata_code">IATA Code</label>
                <input type="text" class="form-control" id="iata_code" name="iata_code" value="{{ $airline->iata_code }}" >
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $airline->name }}" >
            </div>
            <div class="form-group">
                <label for="name">Logo</label><br>
                <input type="file" class="form-control-file" id="logo" name="logo" value="{{ $airline->logo }}" >
            </div><br>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
