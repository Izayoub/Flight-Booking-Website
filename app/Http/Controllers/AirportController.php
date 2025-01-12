<?php



namespace App\Http\Controllers;

use App\Models\Airport;
use Illuminate\Http\Request;

class AirportController extends Controller
{
    public function index()
    {
        $airports = Airport::all();
        return view('airports.index', compact('airports'));
    }

    public function create()
    {
        return view('airports.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'iata_code' => 'required|unique:airports',
            'name' => 'required',
            'longitude' => 'required|numeric',
            'latitude' => 'required|numeric',
        ]);

        Airport::create($request->all());

        return redirect()->route('airports.index')->with('success', 'Airport created successfully.');
    }

    public function show($id)
    {
        $airport = Airport::findOrFail($id);
        return view('airports.show', compact('airport'));
    }

    public function edit($id)
    {
        $airport = Airport::findOrFail($id);
        return view('airports.edit', compact('airport'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'iata_code' => 'required|unique:airports,iata_code,'.$id,
            'name' => 'required',
            'longitude' => 'required|numeric',
            'latitude' => 'required|numeric',
        ]);

        $airport = Airport::findOrFail($id);
        $airport->update($request->all());

        return redirect()->route('airports.index')->with('success', 'Airport updated successfully.');
    }

    public function destroy($id)
    {
        $airport = Airport::findOrFail($id);
        $airport->delete();

        return redirect()->route('airports.index')->with('success', 'Airport deleted successfully.');
    }
}

