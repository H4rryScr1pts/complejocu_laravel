<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Place;
use App\Models\Parking;
use App\Models\Organizer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function __construct() {
        $this->middleware("auth");
    }
    
    public function index() {
        $events = Event::with("organizer", "place", "parking")->get();

        return view("admin.event.index", [
            "events" => $events
        ]);
    }

    public function read(Event $event) {
        $record = Event::with("organizer", "place", "parking")->find($event->id);

        return view("admin.event.read", [
            "event" => $record
        ]);
    }

    public function create() {
        return view("admin.event.create", [
            "organizers" => Organizer::all(),
            "places" => Place::all(),
            "parkings" => Parking::all()
        ]);
    }

    public function store(Request $request) {
        $this->validate($request, [
            "name" => "required",
            "description" => "required",
            "picture" => "required",
            "places" => "required|numeric",
            "date" => "required",
            "place_id" => "required",
            "organizer_id" => "required",
        ]);

        Event::create([
            "name" => $request->name,
            "picture" => $request->picture,
            "description" => $request->description,
            "places" => $request->places,
            "availables" => $request->places,
            "date" => $request->date,
            "place_id" => $request->place_id,
            "organizer_id" => $request->organizer_id,
            "parking_id" => $request->parking_id,
        ]);

        return redirect()->route("admin.eventos")->with("message", "Evento creado exitosamente");
    }

    public function edit(Event $event) {
        $record = Event::with("organizer", "place", "parking")->find($event->id);

        return view("admin.event.edit", [
            "event" => $record,
            "organizers" => Organizer::all(),
            "places" => Place::all(),
            "parkings" => Parking::all()
        ]);
    }

    public function pat(Request $request) {
        $this->validate($request, [
            "name" => "required",
            "description" => "required",
            "picture" => "required",
            "places" => "required|numeric",
            "date" => "required",
            "place_id" => "required",
            "organizer_id" => "required",
        ]);

        $event = Event::find($request->id);
        $event->fill($request->only(
            "name", 
            "description", 
            "picture", 
            "places" , 
            "date", 
            "place_id",
            "organizer_id",
            "parking_id"
        ));

        $event->save();

         // Redirección al usuario
         return redirect()->route("admin.eventos")->with("message", "Registro Actualizado Correctamente");
    }

    public function delete(Request $request) {
        $event = Event::find($request->id);
        $image_path = public_path("/uploads/" . $event->picture);

        Storage::delete($image_path);
        $event->delete();

        return redirect()->route("admin.eventos")->with("message", "Evento Eliminado Correctamente");
    }
}

