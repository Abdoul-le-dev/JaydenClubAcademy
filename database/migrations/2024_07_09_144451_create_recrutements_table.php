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
        Schema::create('recrutements', function (Blueprint $table) {
            $table->id('id');
            $table->string('nom_joueur');
            $table->date('date_naissance');
            $table->string('position');
            $table->integer('taille');
            $table->integer('poids');
            $table->string('email_contact');
            $table->string('telephone_contact');
            $table->string('adresse');
            $table->string('ville');
            $table->string('pays');
            $table->string('club_precedent')->nullable();
            $table->text('objectif_et_details')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recrutements');
    }
};
