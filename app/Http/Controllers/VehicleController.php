<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    public function list(){
        $vehicles = Vehicle::where('is_active','yes')->get();
        return view('Fleet.Vehicle.list',compact('vehicles'));
    }
}
