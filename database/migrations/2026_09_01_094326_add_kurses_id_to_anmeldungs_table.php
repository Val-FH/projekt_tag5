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
        Schema::table('anmeldungs', function (Blueprint $table) {
            $table->foreignId('kurses_id')->constrained()->cascadeOnDelete();
            $table->dropColumn('kurs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('anmeldungs', function (Blueprint $table) {
            //
        });
    }
};
