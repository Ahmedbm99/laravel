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
        Schema::create('article_scs', function (Blueprint $table) {
            $table->id();
            $table->String('type');
            $table->Integer('annee');
            $table->String('titre');
            $table->String('lienDOI');
            $table->bigInteger('idFile');
            $table->date('datePublication');
            $table->String('titreJournal');
            $table->String('quartileJournal');
            $table->String('volume');
            $table->String('facteur');
            $table->String('indexation');
            $table->String('siteRevue');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article_scs');
    }
};
