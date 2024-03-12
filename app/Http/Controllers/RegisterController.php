<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() {
        return view("auth.register");
    }

    public function store(Request $request) {
        // Validaciónes para campos de formulario
        $this->validate($request, [
            "name" => "required",
            "last_name" => "required",
            "telephone" => "required|numeric|unique:users",
            "email" => "required|email|unique:users",
            "password" => "required|min:8|confirmed"
        ]);

        // Insertar el usuario en la base de datos
        User::create([
            "name" => $request->name,
            "last_name" => $request->last_name,
            "telephone" => $request->telephone,
            "email" => $request->email,
            "password" => $request->password,
        ]);
        
        // Autenticar al usuario y crear una sesión 
        auth()->attempt([
            "name" => $request->name,
            "last_name" => $request->last_name,
            "telephone" => $request->telephone,
            "email" => $request->email,
            "password" => $request->password
        ]);

        return redirect()->route("admin");
    }
}