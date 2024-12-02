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
}
