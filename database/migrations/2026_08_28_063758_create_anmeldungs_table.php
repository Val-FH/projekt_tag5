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
        Schema::create('anmeldungs', function (Blueprint $table) {
            $table->id();
            $table->string('vorname');
            $table->string('nachname');
            $table->string('email');
            $table->string('kurs');
            $table->string('teilnahme');
            $table->date('startdatum')->nullable();
            $table->text('bemerkung')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anmeldungs');
    }
};
