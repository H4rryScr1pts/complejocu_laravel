<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Insertar Organizadores
        DB::table("organizers")->insert([
            [
                "name" => "Nico", 
                "last_name" => "Fraga" , 
                "telephone" => "2213457543", 
                "email" => "nico21fraga@gmail.com"
            ],
            [
                "name" => "Maria", 
                "last_name" => "Contreras" , 
                "telephone" => "2487242341", 
                "email" => "mary03CT@gmail.com"
            ]
        ]);

        // Insertar Lugares
        DB::table("places")->insert([
            ["name" => "Auditorio"],
            ["name" => "Explanada"],
            ["name" => "Teatro"],
            ["name" => "Sala de Cine"],
        ]);

        // Insertar Estacionamientos
        DB::table("parkings")->insert([
            [
                "name" => "Estacionamiento A",
                "num_places" => 10,
                "availables" => 10,
            ],
            [
                "name" => "Estacionamiento B",
                "num_places" => 10,
                "availables" => 10,
            ],
        ]);

        // Insertar Cajones
        DB::table("drawers")->insert([
            [
                "nombre" => "A1",
                "estatus" => "disponible",
                "parking_id" => 1
            ],
            [
                "nombre" => "A2",
                "estatus" => "disponible",
                "parking_id" => 1
            ],
            [
                "nombre" => "B1",
                "estatus" => "disponible",
                "parking_id" => 2
            ],
            [
                "nombre" => "B2",
                "estatus" => "disponible",
                "parking_id" => 2
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('database', function (Blueprint $table) {
            //
        });
    }
};
