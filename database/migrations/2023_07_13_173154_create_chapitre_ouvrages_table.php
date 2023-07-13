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
        Schema::create('chapitre_ouvrages', function (Blueprint $table) {
            $table->id();
            $table->String('annee');
            $table->String('type');
            $table->String('titre');
            $table->String('editeur');
            $table->String('lienEditeur');
            $table->String('ISBN/issn');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chapitre_ouvrages');
    }
};
