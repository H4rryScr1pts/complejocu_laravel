<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Organizer;
use App\Models\Parking;
use App\Models\Place;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function __construct() {
        $this->middleware("auth");
    }
    
    public function index() {
        return view("admin.event.index");
    }

    public function create() {
        return view("admin.event.create", [
            "organizers" => Organizer::all(),
            "places" => Place::all(),
            "parkings" => Parking::all()
        ]);
    }

    public function store(Request $request) {
        dd($request);
    }

    public function edit() {

    }

    public function pat() {

    }

    public function delele(Request $request) {
        $event = Event::find($request->id);
        $event->delete();

        return redirect()->route("admin.eventos")->with("message", "Evento Eliminado Correctamente");
    }
}

