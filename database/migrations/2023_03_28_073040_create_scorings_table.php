<?php

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
        // maak een tabel aan met de naam scorings met de volgende velden
        Schema::create('scorings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ReservationId')->constrained('reservations')->onDelete('cascade');
            $table->string('Name');
            $table->integer('Points');
            $table->boolean('IsActive');
            $table->string('Note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scorings');
    }
};
