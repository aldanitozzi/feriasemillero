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
        Schema::create('cronogramas', function (Blueprint $table) {
            $table->id();
            $table->integer('ci');
            $table->string('nombre');
            $table->integer('matematicas');
            $table->integer('fisica');
            $table->integer('quimica');
            $table->integer('lenguaje');
            $table->integer('musica');
            $table->integer('psicologia');
            $table->integer('educacion_fisica');
            $table->integer('religion');
            $table->integer('artes_plasticas');
            $table->integer('sociales');
            $table->string('imagen')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('cronogramas');
    }
};
