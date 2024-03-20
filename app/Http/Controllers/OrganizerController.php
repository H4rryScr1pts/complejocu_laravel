<?php

namespace App\Http\Controllers;

use App\Models\Organizer;
use Illuminate\Http\Request;

class OrganizerController extends Controller
{
    /** Vlidación de sesión iniciada
     * Redirección en caso de no estar autenticado
     */
    public function __construct() {
        $this->middleware("auth");
    }

    /** Renderizar página principal y pasar infromación de los organizadores */
    public function index() {
        return view("admin.organizer.index", [
            "organizers" => Organizer::all()
        ]);
    }

    /** Renderizar vista para actualizar un organizador
     * 
     */
    public function create() {
        return view("admin.organizer.create");
    }

    /** Crear un Organizador
     * Se valida la entreada de datos y si no hay ningún error se crea el organizador y redirecciona al usuario
     */
    public function create_store(Request $request) {
        $this->validate($request, [
            "name" => "required",
            "last_name" => "required",
            "telephone" => "required|numeric|unique:users",
            "email" => "required|email|unique:users"
        ]);

        Organizer::create([
            "name" => $request->name,
            "last_name" => $request->last_name,
            "telephone" => $request->telephone,
            "email" => $request->email
        ]);

        return redirect()->route("admin.organizadores")->with("message", "Organizador Registrado Correctamente");
    }

    /** Renderizar la vista edición de un organizador */
    public function edit(Request $request) {
        dd($request);
    }

    /** Eliminar un organizador obteniendolo a través de su id 
     * Tras eliminr el id, se redirecciona al usuario a la sección de organizadores
    */
    public function delete(Request $request) {
        $organizer = Organizer::find($request->id);
        $organizer->delete();
        return redirect()->route("admin.organizadores")->with("message-delete", "Organizador eliminado exitosamente");
    }
}
