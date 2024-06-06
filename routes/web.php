<?php

use App\Http\Controllers\AirlineController;
use App\Http\Controllers\AirportController;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/offers', function () {
    return view('offer'); // Nom du fichier blade correspondant à votre page d'offres
});

Route::get('/abouts', function () {
    return view('about'); // Nom du fichier blade correspondant à votre page d'offres
});
Route::get('/details', function () {
    return view('flight_details'); // Nom du fichier blade correspondant à votre page d'offres
});

Route::get('/test', function () {
    return view('welcome'); // Nom du fichier blade correspondant à votre page d'offres
});
// routes/web.php

Route::post('/flights/search', [FlightController::class, 'search'])->name('flights.search');
Route::get('/flights', [FlightController::class, 'index'])->name('flights.index');

Route::get('/flights/{id}', [FlightController::class, 'show'])->name('flights.show');
Route::get('/flight_list', function () {
    return view('flights.index_admin');
});

Route::get('/admins', function () {
    return view('admin');
}); // Nom du fichier blade correspondant à votre page d'offres
Route::get('/admins_user', function () {
    return view('admin_v1');
});

//Route::resource('flights', UserController::class);
//Route::post('/flights/{flight}/book', [FlightController::class, 'handleBook'])->name('flights.handleBook');
Route::get('/flights/{flight}/book', [FlightController::class, 'book'])->name('flights.book');

Route::resource('flights', FlightController::class);

Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::get('/registration', [AuthManager::class, 'registration'])->name('registration');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');
Route::post('/registration', [AuthManager::class, 'registrationPost'])->name('registration.post');
Route::post('/logout', [AuthManager::class, 'logout'])->name('logout');

Route::get('/admins/flight_index', [FlightController::class, 'redirectToFlightList'])->name('flights.redirect');
Route::get('/admins/flight_index/{id}', [FlightController::class, 'show_admin'])->name('flights.show_admin');
Route::get('/admins/flight_index/{id}/edit', [FlightController::class, 'edit'])->name('flights.edit_admin');
Route::get('/admins/flight_create', [FlightController::class, 'create'])->name('flights.create_admin');
Route::post('/admins/flight_store', [FlightController::class, 'store'])->name('flights.store');

Route::resource('users', UserController::class);
Route::resource('airports', AirportController::class);
Route::resource('airlines', AirlineController::class);

Route::get('/search/flights', [FlightController::class, 'search'])->name('search.flights');
Route::get('/reservation/confirmation', [ReservationController::class,'showConfirmation'])->name('reservation.confirmation');
Route::post('/reservation/confirmation', [ReservationController::class,'showConfirmation'])->name('reservation.processConfirmation');












// routes/web.php

//Route::get('/reservation/{flight}/step1', [ReservationController::class, 'step1'])->name('reservation.step1');
//Route::post('/reservation/{flight}/step1', [ReservationController::class, 'postStep1'])->name('reservation.postStep1');

//Route::get('/reservation/{flight}/step2', [ReservationController::class, 'step2'])->name('reservation.step2');
//Route::post('/reservation/{flight}/step2', [ReservationController::class, 'postStep2'])->name('reservation.postStep2');

//Route::get('/reservation/{flight}/step3', [ReservationController::class, 'step3'])->name('reservation.step3');
//Route::post('/reservation/{flight}/step3', [ReservationController::class, 'postStep3'])->name('reservation.postStep3');

//Route::get('/reservation/{flight}/step4', [ReservationController::class, 'step4'])->name('reservation.step4');
//Route::post('/reservation/{flight}/step4', [ReservationController::class, 'postStep4'])->name('reservation.postStep4');
//Route::get('/reservation/{flight}/seats', [ReservationController::class, 'seatSelection'])->name('reservation.seatSelection');

//Route::get('/reservation/{flight}/complete', [ReservationController::class, 'showCompleteForm'])->name('reservation.complete');
//Route::post('/reservation/{flight}/complete', [ReservationController::class, 'processCompleteForm'])->name('reservation.processComplete');

//Route::get('/reservation/{flight}/passenger_count', [ReservationController::class, 'showPassengerCountForm'])->name('reservation.passengerCount');
//Route::post('/reservation/{flight}/passenger_count', [ReservationController::class, 'postPassengerCount'])->name('reservation.postPassengerCount');

//Route::get('/reservation/{flight}/passenger_details', [ReservationController::class, 'showPassengerDetailsForm'])->name('reservation.passengerDetails');
//Route::post('/reservation/{flight}/passenger_details', [ReservationController::class, 'postPassengerDetails'])->name('reservation.postPassengerDetails');
Route::get('/reservation/step1/{flight_id}', [ReservationController::class, 'showStep1'])->name('reservation.step1');
Route::post('/reservation/step1', [ReservationController::class, 'processStep1'])->name('reservation.processStep1');
Route::get('/reservation/step2', [ReservationController::class, 'showStep2'])->name('reservation.step2');
Route::post('/reservation/processForm', [ReservationController::class, 'processForm'])->name('reservation.processForm');
Route::get('/test3', [ReservationController::class, 'showTest3'])->name('test3');

Route::get('/reservation/payment', [ReservationController::class, 'showPayment'])->name('reservation.payment');
Route::post('/reservation/payment', [ReservationController::class, 'processPayment'])->name('reservation.processPayment');

Route::get('/reservation/success', [ReservationController::class,'showSuccess'])->name('reservation.success');





//Route::get('/reservation/{id}', [ReservationController::class, 'showForm'])->name('reservation.showForm');

//Route::post('/reservation', [ReservationController::class, 'processForm'])->name('reservation.processForm');
