<?php

use App\Models\Drawer;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('drawers', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->string("estatus");
            $table->time("hora_inicio")->nullable();
            $table->time("hora_salida")->nullable();
            $table->foreignId("parking_id")->constrained()->onDelete("cascade");
            $table->timestamps();
        });

        // Insertar registros tras correr la migración
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drawers');
    }
};
