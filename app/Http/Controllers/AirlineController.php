<?php

namespace App\Http\Controllers;

use App\Models\Airline;
use Illuminate\Http\Request;

class AirlineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $airlines = Airline::all();
        return view('airlines.index', compact('airlines'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('airlines.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'iata_code' => 'required|unique:airlines',
            'name' => 'required',
            'logo' => 'required',

        ]);

        Airline::create($request->all());

        return redirect()->route('airlines.index')->with('success', 'Airline created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $airline = Airline::findOrFail($id);
        return view('airlines.show', compact('airline'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $airline = Airline::findOrFail($id);
        return view('airlines.edit', compact('airline'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'iata_code' => 'required|unique:airlines,iata_code,'.$id,
            'name' => 'required',
            'logo' => 'required',
        ]);

        $airline = Airline::findOrFail($id);
        $airline->update($request->all());

        return redirect()->route('airlines.index')->with('success', 'Airline updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $airline = Airline::findOrFail($id);
        $airline->delete();

        return redirect()->route('airlines.index')->with('success', 'Airline deleted successfully.');
    }
}
