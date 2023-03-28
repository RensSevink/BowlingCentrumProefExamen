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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ReservationId')->constrained('reservations')->onDelete('cascade');
            $table->varchar('Food');
            $table->varchar('Drinks');
            $table->decimal('Price');
            $table->boolean('IsActive');
            $table->varchar('Note');
            $table->date('DateCreated');
            $table->date('DateChanged');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
