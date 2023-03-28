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
            $table->foreignId('OrderId')->constrained('order')->onDelete('cascade');
            $table->varchar('TypeOfOccasion');
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
        Schema::dropIfExists('occasion_options');
    }
};
