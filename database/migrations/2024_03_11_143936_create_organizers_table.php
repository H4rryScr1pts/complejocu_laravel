<?php

use App\Models\Organizer;
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
        Schema::create('organizers', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("last_name");
            $table->string("telephone");
            $table->string("email");
            $table->timestamps();
        });

        Organizer::create([
            "name" => "Nico",
            "last_name" => "Fraga",
            "telephone" => "2217683241",
            "email" => "nico21fraga@gmail.com"
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organizers');
    }
};
