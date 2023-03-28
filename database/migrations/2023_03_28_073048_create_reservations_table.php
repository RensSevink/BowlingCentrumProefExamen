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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('UserId')->constrained('users')->onDelete('cascade');
            $table->integer("ReservationNumber");
            $table->date("ReservationDate");
            $table->time("ReservationTime");
            $table->smallInteger("BowlingAlley");
            $table->boolean("HelpFences");
            $table->smallInteger("NumberOfAdults");
            $table->smallInteger("NumberOfChildren");
            $table->time("OpeningTime");
            $table->boolean("IsActive");
            $table->string("Note") ->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
