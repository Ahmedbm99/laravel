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
        Schema::create('pves', function (Blueprint $table) {
            $table->id();
            $table->String('titre');
            $table->String('file');
            $table->text('description');
            $table->String('encadrant');
            $table->String('co-encadrant');
            $table->String('institution');
            $table->String('etudiant');
            $table->date('dateDebut');
            $table->date('dateFin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pves');
    }
};
