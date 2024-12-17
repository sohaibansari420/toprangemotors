<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    public function list(){
        $vehicle = Vehicle::where('is_active','yes')->get();
        $data = [
            'vehicles' => $vehicle,
        ]; 
        return view('Fleet.Vehicle.list')->with('data');
    }
}
