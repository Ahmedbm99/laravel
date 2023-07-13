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
        Schema::create('membres', function (Blueprint $table) {
            $table->id();
            $table->String('nom');
            $table->String('prenom');
            $table->String('cin');
            $table->String('passport');
            $table->String('cnrps');
            $table->String('grade');
            $table->String('email');
            $table->String('password');
            $table->String('specialite');
            $table->String('diplome');
            $table->date('dateNaissence');
            $table->String('fonctionAdministrative');
            $table->String('h-index');
            $table->String('orcid');
            $table->String('telephoneMobile');
            $table->String('telephoneFax');
            $table->String('linkedin');
            $table->String('scholar');
            $table->date('dateDernierDiplome');
            $table->String('description');

            $table->String('verify_token');
            $table->String('verify_status');
            $table->integer('approve');
            $table->integer('code');
            $table->integer('etat');
            $table->unsignedBigInteger('idFile');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('membres');
    }
};
