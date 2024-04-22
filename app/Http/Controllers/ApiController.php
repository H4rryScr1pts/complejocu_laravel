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

    public function getDrawer($id) {
        $cajon = Drawer::find($id);

        if ($cajon) {
            return response()->json([
                'id' => $cajon->id,
                'estado' => $cajon->estatus
            ]);
        } else {
            return response()->json(['error' => 'Cajón no encontrado'], 404);
        }
    }

    public function setDrawer(Request $request) {
         $datos = $request->json()->all();

        // Actualizar el estado del cajón en la base de datos
        $cajon = Drawer::find($datos['id']);
        if ($cajon) {
            $cajon->estatus = $datos['estado'];
            $cajon->save();
            return response()->json(['mensaje' => 'Datos del cajón actualizados correctamente']);
        } else {
            return response()->json(['error' => 'Cajón no encontrado'], 404);
        }
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
