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
        Schema::create('places', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->timestamps();
        });

        DB::table("places")->insert([
            ["name" => "Auditorio"],
            ["name" => "Explanada"],
            ["name" => "Sala de Cine"],
            ["name" => "Centro de Exposiciones"],
            ["name" => "Teatro"],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('places');
    }
};
