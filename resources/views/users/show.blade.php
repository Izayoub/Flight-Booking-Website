@extends('landing_page.offers_layout')

@section('content')
    <div class="container">
        <h1>User Details</h1>
        <p><strong>ID:</strong> {{ $user->id }}</p>
        <p><strong>Name:</strong> {{ $user->name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        <p><strong>Role:</strong> {{ $user->role }}</p>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Back to list</a>
    </div>
@endsection
