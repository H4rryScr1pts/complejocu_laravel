<?php

namespace App\Http\Controllers;

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
        return view("public.events");
    }

    public function location() {
        return view("public.location");
    }
}
