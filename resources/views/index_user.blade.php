<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Flight Booking</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('admin-styles.css') }}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Admin Dashboard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('flights.index') }}">Users</a></li>
                <li class="nav-item"><a class="nav-link" href="">Flights</a></li>
                <li class="nav-item"><a class="nav-link" href="">Airports</a></li>
                <li class="nav-item"><a class="nav-link" href="">Airlines</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Reservations</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Reviews</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
            </ul>
        </div>
        <button class="btn btn-outline-light">Logout</button>
    </div>
</nav>

<div class="container mt-4">
    <!-- Dashboard Content -->
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Welcome to Admin Dashboard</h1>
            <p class="text-center">Manage your flight booking website efficiently.</p>
        </div>
    </div>

    <!-- User Management Section -->
    <div class="row mt-4">
        <div class="col-md-12">
            <h2>Users Management</h2>
            <a href="" class="btn btn-primary mb-3">Create New User</a>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($user as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->role }}</td>
                        <td>
                            <a href="" class="btn btn-info btn-sm">View</a>
                            <a href="" class="btn btn-warning btn-sm">Edit</a>
                            <form action="" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {!!  $item->links()   !!}
        </div>
    </div>

    <!-- Repeat similar sections for Flights, Airports, Airlines, Reservations, Reviews, and Settings -->

</div>

<!-- Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
