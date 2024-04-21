<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view("public.index");
    }

    public function about() {
        return view("public.about");
    }

    public function services() {
        return view("public.services");
    }

    public function events() {
        $events = Event::all();
        return view("public.events", [
            "events" => $events
        ]);
    }

    public function location() {
        return view("public.location");
    }

    public function event(Event $event) {
        return view("public.event", [
            "event" => $event
        ]);
    }
}
