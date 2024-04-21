<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index() {
        $users = User::all();

        return view("admin.users.index", [
            "users" => $users,
            "page" => "user"
        ]);
    }

    public function get(User $user) {
        if(!$user) {
            return response()->json(["respuesta" => "Usuario no encontrado"]);
        }
        
        return response()->json($user);
       
    }
}