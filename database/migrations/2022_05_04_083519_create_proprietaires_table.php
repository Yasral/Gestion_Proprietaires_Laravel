<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proprietaires', function (Blueprint $table) {
            $table->id();
            $table->string('Nom_proprietaire');
            $table->string('Prenom_proprietaire');
            $table->date('Date_naissance');
            $table->string('Lieu_naissance');
            $table->string('code_piece_identite');
            $table->string('Numero_piece_identite');
            $table->string('Adresse');
            $table->string('Email')->unique();
            $table->string('genre');
            $table->string('civilite');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proprietaires');
    }
};
