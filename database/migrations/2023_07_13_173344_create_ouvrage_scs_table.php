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
        Schema::create('ouvrage_scs', function (Blueprint $table) {
            $table->id();
            $table->String('type');
            $table->String('annee');
            $table->String('titre');
            $table->String('editeur');
            $table->String('lienEditeur');
            $table->String('ISBN/Issn');
            $table->date('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ouvrage_scs');
    }
};
