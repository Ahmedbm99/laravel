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
        Schema::create('brevets', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('annee');
            $table->string('file');
            $table->text('sujet');
            $table->date('date');
            $table->foreign('file')->references('path')->on('files');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brevets');
    }
};
