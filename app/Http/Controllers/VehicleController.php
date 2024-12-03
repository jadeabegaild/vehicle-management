<?php

namespace App\Http\Controllers;

use App\Models\Vehicle; // Add this to use the Vehicle model
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index()
    {
        // Fetch all vehicles from the database
        $vehicles = Vehicle::all();

        // Return the 'vehicles.index' view, passing the $vehicles data
        return view('vehicles.index', compact('vehicles'));
    }

    //BAGO
    public function create()
    {
        return view('vehicles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'seats' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'is_available' => 'required|boolean',
        ]);

        Vehicle::create($request->all());

        return redirect()->route('vehicles.index')->with('success', 'Vehicle added successfully!');
    }
}
