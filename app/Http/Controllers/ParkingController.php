<?php

namespace App\Http\Controllers;

use App\Models\Drawer;
use App\Models\Parking;
use Illuminate\Http\Request;

class ParkingController extends Controller
{
    public function index() {
        return view("admin.parking.index");
    }

    public function get() {
        $parkings = Parking::all();

        return response()->json(["parkings" => $parkings]);
    }

    public function getDrawer(Drawer $drawer) {

        return response()->json($drawer);
    }
}
