<?php

namespace App\Http\Controllers;
use App\Models\Event;
use App\Models\Organizer;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct() {
        $this->middleware("auth");
    }
    
    public function index() {
        $events = Event::orderBy('date', 'asc')->take(3)->get();
        $organizers = Organizer::latest()->take(3)->get();
        return view("admin.index", [
            "events" => $events,
            "organizers" => $organizers,
            "page" => "home"
        ]);
    }
}