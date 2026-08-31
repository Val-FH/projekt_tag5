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
            $table->enum('kurs', ['PHP 101', 'SQL 101', 'HTML 101', 'CSS 101', 'Laravel für Anfänger']);
            $table->enum('teilnahme', ['online', 'vor_ort']);
            $table->date('startdatum')->nullable();
            $table->text('bemerkung')->nullable();
            $table->enum('interessen', ['Backend', 'Frontend', 'Datenbank', 'Testing'])->nullable();
            $table->tinyInteger('datenschutz')->nullable();
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
