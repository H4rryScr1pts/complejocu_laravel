<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return view("auth.login");
    }

    public function store(Request $request) {
        $this->validate($request, [
            "email" => "required|email",
            "password" => "required"
        ]);
    }
}
