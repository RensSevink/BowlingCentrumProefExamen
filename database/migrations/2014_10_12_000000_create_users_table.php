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
        // maak een tabel aan met de naam users
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('Firstname');
            $table->string('Infix') ->nullable();
            $table->string('Lastname');
            $table->string('Password');
            $table->boolean('IsActive');
            $table->string('Note') ->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
