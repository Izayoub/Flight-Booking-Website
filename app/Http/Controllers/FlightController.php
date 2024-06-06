<?php

namespace App\Http\Controllers;



use App\Models\Airline;
use App\Models\Airport;
use Illuminate\Http\Request;
use App\Models\Flight;



class FlightController extends Controller
{
    public function index()
    {
        //$flights = Flight::All();

        $flights = Flight::with('airline')->get();


        return view('flights.flight_list', compact('flights'));
    }
    public function redirectToFlightList()
    {
        $flights = Flight::All();
        return view('flights.index_admin', compact('flights'));
    }
    public function create()
    {
        $airports = Airport::all();
        $airlines = Airline::all();
        return view('flights.create_admin', compact('airports', 'airlines'));
    }
    public function search(Request $request)
    {
        $departureAirportName = $request->input('departure_airport');
        $arrivalAirportName = $request->input('arrival_airport');
        $departureDate = $request->input('departure_date');


        // Recherchez l'ID de l'aéroport de départ à partir de son nom
        $departureAirport = Airport::where('name', $departureAirportName)->first();
        if (!$departureAirport) {
            // Gérer le cas où l'aéroport de départ n'est pas trouvé
            return redirect()->back()->with('error', 'L\'aéroport de départ spécifié n\'a pas été trouvé.');
        }

        // Recherchez l'ID de l'aéroport d'arrivée à partir de son nom
        $arrivalAirport = Airport::where('name', $arrivalAirportName)->first();
        if (!$arrivalAirport) {
            // Gérer le cas où l'aéroport d'arrivée n'est pas trouvé
            return redirect()->back()->with('error', 'L\'aéroport d\'arrivée spécifié n\'a pas été trouvé.');
        }

        // Requête pour récupérer les vols correspondants aux critères de recherche
        $flights = Flight::where('departure_airport_id', $departureAirport->id)
            ->where('arrival_airport_id', $arrivalAirport->id)
            ->whereDate('departure_date', $departureDate)

            ->get();

        // Passer les vols récupérés à la vue pour l'affichage
        return view('test2')->with('flights', $flights);
    }

    public function show($id)
    {
        $flight = Flight::findOrFail($id);
        return view('flights.show', compact('flight'));
    }
    public function show_admin($id)
    {
        $flight = Flight::findOrFail($id);
        return view('flights.show_admin', compact('flight'));
    }
    public function book($id)
    {
        $flight = Flight::findOrFail($id);
        return view('flights.book', compact('flight'));
    }
    public function handleBook(Request $request, $id)
    {
        // Logique pour gérer la réservation
        // Par exemple, créer une réservation dans la base de données

        // Rediriger l'utilisateur avec un message de succès
        return redirect()->route('reservation.step1')->with('success', 'Votre réservation a été effectuée avec succès.');
    }
    public function store(Request $request)
    {
        $request->validate([
            'flight_number' => 'required',
            'price' => 'required',
            'departure_airport_id' => 'required',
            'arrival_airport_id' => 'required',
            'departure_time' => 'required|date',
            'arrival_time' => 'required|date',
        ]);

        Flight::create($request->all());

        return redirect()->route('flights.redirect')->with('success', 'Flight created successfully.');
    }
    public function edit($id)
    {
        $flight = Flight::findOrFail($id);
        $airlines = Airline::all();
        $airports = Airport::all();
        return view('flights.edit_admin', compact('flight', 'airlines', 'airports'));
    }
    public function update(Request $request, Flight $flight)
    {
        $request->validate([
            'flight_number' => 'required',
            'price' => 'required',
            'departure_airport_id' => 'required',
            'arrival_airport_id' => 'required',
            'departure_time' => 'required|date',
            'arrival_time' => 'required|date',
        ]);

        $flight->update($request->all());

        return redirect()->route('flights.redirect')->with('success', 'Flight updated successfully.');
    }
    public function destroy(Flight $flight)
    {
        $flight->delete();

        return redirect()->route('flights.index')->with('success', 'Flight deleted successfully.');
    }
}

