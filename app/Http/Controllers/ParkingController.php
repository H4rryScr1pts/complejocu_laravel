<?php

namespace App\Http\Controllers;

use App\Models\Drawer;
use App\Models\Parking;
use Illuminate\Http\Request;

class ParkingController extends Controller
{
    public function index() {
        $drawersA = Drawer::where("parking_id", 1)->get();
        $drawersB = Drawer::where("parking_id", 2)->get();

        return view("admin.parking.index", [
            "drawersA" => $drawersA,
            "drawersB" => $drawersB,
            "page" => "report"
        ]);
    }

    public function getDrawer(Drawer $drawer) {

        return response()->json($drawer);
    }
}
