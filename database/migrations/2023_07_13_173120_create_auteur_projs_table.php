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
        Schema::create('auteur_projs', function (Blueprint $table) {

            $table->id();
            $table->String('type');
            $table->String('titre');
            $table->String('encadrant');
            $table->String('mail_encadrant');
            $table->date('date');
            $table->String('soummissionnaire');
            $table->integer('approve');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('auteur_projs');
    }
};
