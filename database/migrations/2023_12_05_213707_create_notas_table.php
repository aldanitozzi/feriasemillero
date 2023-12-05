<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;



class CreateNotasTable extends Migration
{
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->id();
            $table->string('materia');
            $table->integer('nota');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('notas');
    }
};

