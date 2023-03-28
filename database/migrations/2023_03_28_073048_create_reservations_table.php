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
            $table->foreignId('UserId')->constrained('user')->onDelete('cascade');
            $table->int("ReservationNumber");
            $table->date("ReservationDate");
            $table->time("ReservationTime");
            $table->smallint("BowlingAlley");
            $table->boolean("HelpFences");
            $table->smallint("NumberOfAdults");
            $table->smallint("NumberOfChildren");
            $table->time("OpeningTime");
            $table->boolean("IsActive");
            $table->string("Note") ->nullable();
            $table->date("DateCreated");
            $table->date("DateChanged");
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
