<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function list(){
        return view('Fleet.Vehicle.list');
    }
}
