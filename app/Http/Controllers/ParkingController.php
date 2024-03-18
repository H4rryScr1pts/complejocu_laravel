<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParkingController extends Controller
{
    public function index() {
        return view("admin.parking.index");
    }
}
