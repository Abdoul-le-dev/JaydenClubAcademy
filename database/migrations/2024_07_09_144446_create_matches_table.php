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
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('equipe_a');
            $table->unsignedBigInteger('equipe_b');
            $table->date('match_date');
            $table->time('start_date');
            $table->time('end_date')->nullable();
            $table->string('terrain');
            $table->timestamps();

            $table->foreign('equipe_a')->references('id')->on('equipes')->onDelete('cascade');
            $table->foreign('equipe_b')->references('id')->on('equipes')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matches');
    }
};
