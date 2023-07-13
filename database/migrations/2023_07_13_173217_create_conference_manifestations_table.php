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
        Schema::create('conference_manifestations', function (Blueprint $table) {
            $table->id();
            $table->String('titre');
            $table->String('lieu');
            $table->integer('prix');
            $table->date('dateDebut');
            $table->date('dateFin');
            $table->String('classe');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conference_manifestations');
    }
};
