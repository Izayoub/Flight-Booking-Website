<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\Passenger;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Stripe\PaymentIntent;
use Stripe\Stripe;

class ReservationController extends Controller
{
    /*public function step1(Flight $flight)
    {
        $data = session('reservation', []);
        return view('reservation.step1', compact('flight', 'data'));
    }

    public function postStep1(Request $request, Flight $flight)
    {
        $request->validate([
            'class' => 'required',
        ]);

        $data = $request->only(['class']);
        session()->put('reservation', $data);

        return redirect()->route('reservation.step2', ['flight' => $flight->id]);
    }

    public function step2(Flight $flight)
    {
        $data = session('reservation', []);
        return view('reservation.step2', compact('flight', 'data'));
    }

    public function postStep2(Request $request, Flight $flight)
    {
        $request->validate([
            'baggage' => 'required',
        ]);

        $data = $request->only(['baggage']);
        session()->put('reservation.baggage', $data['baggage']);

        return redirect()->route('reservation.step3', ['flight' => $flight->id]);
    }

    public function step3(Flight $flight)
    {
        $data = session('reservation', []);
        return view('reservation.step3', compact('flight', 'data'));
    }

    public function postStep3(Request $request, Flight $flight)
    {
        $request->validate([
            'seat' => 'required',
        ]);

        $data = $request->only(['seat']);
        session()->put('reservation.seat', $data['seat']);

        return redirect()->route('reservation.step4', ['flight' => $flight->id]);
    }

    public function step4(Flight $flight)
    {
        $data = session('reservation', []);
        return view('reservation.step4', compact('flight', 'data'));
    }

    public function postStep4(Request $request, Flight $flight)
    {
        $request->validate([
            'payment' => 'required',
        ]);

        $data = session('reservation', []);
        $data['payment_method'] = $request->input('payment');

        try {
            $this->processReservation($flight, $data);

            // Clear the session data
            session()->forget('reservation');

            // Redirect with success message
            return redirect()->route('flights.index')->with('success', 'Votre réservation a été effectuée avec succès.');
        } catch (\Exception $e) {
            // Handle exception (e.g., return an error message)
            return redirect()->back()->with('error', 'Une erreur est survenue lors de la réservation. Veuillez réessayer.');
        }
    }

    protected function processReservation(Flight $flight, array $data)
    {
        // Assuming you have a user logged in
        // $user = auth()->user();

        // Process payment logic (this is just a placeholder, implement actual payment logic)
        // $paymentSuccess = $this->processPayment($data['payment_method']);

        // For this example, let's assume payment is always successful
        $paymentSuccess = true;

        if ($paymentSuccess) {
            // Create the reservation
            $reservation = Reservation::create([
                'flight_id' => $flight->id,
                'class' => $data['class'],
                'baggage' => $data['baggage'],
                'seat' => $data['seat'],
                'payment_method' => $data['payment_method'],
            ]);

            // Optionally, associate the reservation with the user
            // $user->reservations()->save($reservation);

            return $reservation;
        } else {
            // Handle payment failure (e.g., throw an exception or return an error message)
            throw new \Exception('Payment processing failed');
        }
    }

    protected function processPayment($paymentMethod)
    {
        // Implement your payment processing logic here
        // For now, let's return true to simulate a successful payment
        return true;
    }*/


    /*public function showForm(Request $request)
    {
        $flight = Flight::find($request->id);
        $passenger_count = $request->input('passenger_count');

        return view('test', compact('flight', 'passenger_count'));
    }*/
/*

$flight = Flight::find($request->id); // Adjust as per your application logic
        $passenger_count = $request->input('passenger_count');

        // Process form data here

        //return view('test3', compact('flight', 'passenger_count'));
        return redirect()->route('test3');
*/




    /*public function processForm(Request $request)
    {
        // Extract flight ID from the request
        $flightId = $request->input('flight_id');

        // Extract passenger data from the request
        $passengersData = $request->input('passengers');

        // Loop through each passenger data and save it
        foreach ($passengersData as $passengerData) {
            $passenger = new Passenger();
            $passenger->firstname = $passengerData['firstname'];
            $passenger->lastname = $passengerData['lastname'];
            $passenger->email = $passengerData['email'];
            $passenger->phone = $passengerData['phone'];
            $passenger->class = $passengerData['class'];
            $passenger->baggage = $passengerData['baggage'];
            $passenger->flight_id = $flightId;
            $passenger->save();
        }

        // Redirect to the test3 route
        return redirect()->route('test3');
    }


    public function showCompleteForm(Flight $flight)
    {
        $data = session('reservation', []);
        return view('reservation.reserv', compact('flight', 'data'));
    }

    public function processCompleteForm(Request $request, Flight $flight)
    {
        $validated = $request->validate([
            'class' => 'required|string',
            'baggage' => 'required|string',
            'seat' => 'required|string',
            'payment' => 'required|string',
        ]);

        $data = $request->only(['class', 'baggage', 'seat', 'payment']);

        try {
            $this->processReservation($flight, $data);

            // Clear the session data
            session()->forget('reservation');

            // Redirect with success message
            return redirect()->route('flights.index')->with('success', 'Votre réservation a été effectuée avec succès.');
        } catch (\Exception $e) {
            // Handle exception (e.g., return an error message)
            return redirect()->back()->with('error', 'Une erreur est survenue lors de la réservation. Veuillez réessayer.');
        }
    }*/
/*
    protected function processReservation(Flight $flight, array $data)
    {
        // Assuming you have a user logged in
        // $user = auth()->user();

        // Process payment logic (this is just a placeholder, implement actual payment logic)
        // $paymentSuccess = $this->processPayment($data['payment_method']);

        // For this example, let's assume payment is always successful
        $paymentSuccess = true;

        if ($paymentSuccess) {
            // Create the reservation
            $reservation = Reservation::create([
                'flight_id' => $flight->id,
                'class' => $data['class'],
                'baggage' => $data['baggage'],
                'seat' => $data['seat'],
                'payment_method' => $data['payment'],
            ]);

            // Optionally, associate the reservation with the user
            // $user->reservations()->save($reservation);

            return $reservation;
        } else {
            // Handle payment failure (e.g., throw an exception or return an error message)
            throw new \Exception('Payment processing failed');
        }
    }*/


   /* public function seatSelection(Flight $flighttt)
    {
        return view('test', compact('flighttt'));
    }*/



    /*public function showPassengerCountForm(Flight $flight)
    {
        return view('reservation.passenger_count', compact('flight'));
    }

    public function postPassengerCount(Request $request, Flight $flight)
    {
        $request->validate([
            'passenger_count' => 'required|integer|min:1|max:10',
        ]);

        $passengerCount = $request->input('passenger_count');
        return redirect()->route('reservation.passengerDetails', ['flight' => $flight->id, 'passenger_count' => $passengerCount]);
    }

    public function showPassengerDetailsForm(Flight $flight, Request $request)
    {
        $passengerCount = $request->input('passenger_count');
        return view('reservation.passenger_details', compact('flight' ));
    }

    public function postPassengerDetails(Request $request, Flight $flight)
    {
        $request->validate([
            'passengers' => 'required|array',
            'passengers.*.firstname' => 'required|string',
            'passengers.*.lastname' => 'required|string',
            'passengers.*.email' => 'required|email',
            'passengers.*.phone' => 'required|string',
            'passengers.*.class' => 'required|string|in:economy,business,first',
            'passengers.*.baggage' => 'required|string|in:none,standard,extra',
        ]);

        $passengerData = $request->input('passengers');
        session()->put('reservation.passengers', $passengerData);

        // Proceed to the next step or handle reservation logic
        // For example, you can redirect to the seat selection step or payment step
        return redirect()->route('reservation.step3', ['flight' => $flight->id]);
    }*/

    public function showStep1($flightId)
    {
        $flight = Flight::find($flightId);
        return view('reservation.step1', compact('flight'));
    }

    public function processStep1(Request $request)
    {
        $flightId = $request->input('flight_id');
        $passengerCount = $request->input('passenger_count');
        return redirect()->route('reservation.step2', ['flight_id' => $flightId, 'passenger_count' => $passengerCount]);
    }

    public function showStep2(Request $request)
    {
        $flightId = $request->query('flight_id');
        $passengerCount = $request->query('passenger_count');
        $flight = Flight::find($flightId);
        $flightPrice = $flight->price; // Supposons que le prix est stocké dans une colonne 'price' de la table 'flights'
        return view('reservation.step2', compact('flight', 'passengerCount', 'flightPrice'));
    }

    public function processForm(Request $request)
    {
        $flightId = $request->input('flight_id');
        $passengerCount = $request->input('passenger_count');
        $passengersData = $request->input('passengers');

        foreach ($passengersData as $passengerData) {
            $passenger = new Passenger();
            $passenger->firstname = $passengerData['firstname'];
            $passenger->lastname = $passengerData['lastname'];
            $passenger->email = $passengerData['email'];
            $passenger->phone = $passengerData['phone'];
            $passenger->class = $passengerData['class'];
            $passenger->baggage = $passengerData['baggage'];
            $passenger->flight_id = $flightId;
            $passenger->save();
        }

        if (!empty($passengersData)) {
            $selectedClass = $passengersData[1]['class'];
            // Utiliser $selectedClass comme vous le souhaitez...
        } else {
            // Si $passengersData est vide, vous pouvez définir une valeur par défaut pour $selectedClass
            $selectedClass = 'Valeur par défaut';
            // Vous pouvez également afficher un message d'erreur ou prendre d'autres mesures nécessaires.
            // Par exemple :
            echo "Aucun passager n'a été fourni.";
            // Ou vous pouvez rediriger l'utilisateur vers une autre page.
        }

        $selectedBaggage = $passengersData[1]['baggage']; // Assuming all passengers have the same baggage option

        return redirect()->route('test3')->with([
            'selectedClass' => $selectedClass,
            'selectedBaggage' => $selectedBaggage,
            'passengerCount' => $passengerCount
        ]);
    }

    public function showTest3(Request $request)
    {
        $selectedClass = session('selectedClass');
        $selectedBaggage = session('selectedBaggage');
        $passengerCount = session('passengerCount');
        return view('test3', compact('selectedClass', 'selectedBaggage', 'passengerCount'));
    }
    public function showConfirmation(Request $request)
    {
        $selectedClass = session('selectedClass');
        $selectedBaggage = session('selectedBaggage');
        $passengerCount = session('passengerCount');
        $passengersData = session('passengersData'); // Assuming passenger data is stored in session

        return view('reservation.confirmation', compact('selectedClass', 'selectedBaggage', 'passengerCount', 'passengersData'));
    }
    public function processConfirmation(Request $request)
    {
        // You can add any additional processing here if needed

        return redirect()->route('reservation.payment');
    }
    public function showPayment()
    {
        return view('reservation.payment');
    }

    public function processPayment(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $amount = 500000; // Amount in cents, e.g. $5000.00
        $currency = 'usd';

        $paymentIntent = PaymentIntent::create([
            'amount' => $amount,
            'currency' => $currency,
            'payment_method_types' => ['card'],
        ]);

        $clientSecret = $paymentIntent->client_secret;

        return view('reservation.payment', compact('clientSecret'));
    }
    public function showSuccess()
    {
        return view('reservation.success');
    }


}
