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
        Schema::create('occasion_options', function (Blueprint $table) {
            $table->id();
            $table->foreignId('OrderId')->constrained('orders')->onDelete('cascade');
            $table->string('TypeOfOccasion');
            $table->boolean('IsActive');
            $table->string('Note');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('occasion_options');
    }
};
