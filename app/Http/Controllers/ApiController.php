<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Event;
use App\Models\Drawer;
use App\Models\Parking;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function eventos() {
        $eventos = Event::all();
        return response()->json($eventos);
    }

    public function evento($id) {
        $event = Event::find($id);

        if(!$event) {
            return response()->json(["respueta" => "no se ecnontró el evento"]);
        }

        return response()->json($event);
    }

    public function getDrawer(Drawer $drawer) {

        return response()->json($drawer);
    }

    public function setDrawer(Request $request) {

        return response()->json([
            "espuesta"=>"conetcado",
            "request" => $request
        ]);
    }

    public function cajones() {
        $cajones = Drawer::all();

        return response()->json($cajones);
    }

    public function usuarios() {
        $usuarios = User::all();
        return response()->json($usuarios);
    }

    public function usuario(User $user) {
        if(!$user) {
            return response()->json(["respuesta" => "Usuario no encontrado"]);
        }
        
        return response()->json($user);
    }

    public function estacionamientos() {
        $parkings = Parking::all();

        return response()->json(["parkings" => $parkings]);
    }

    public function estacionamiento(Parking $parking) {
        return response()->json($parking);
    }
}
