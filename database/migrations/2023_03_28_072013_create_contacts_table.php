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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            // maak een veld aan met een relation naar de schools tabel op id
            $table->foreignId('UserId')->constrained('users')->onDelete('cascade');
            // string
            $table->string('Email');
            // int
            $table->integer('Phonenumber');
            // boolean
            $table->boolean('IsActive');
            // string
            $table->string('Note')->nullable();
            // timestamps
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
