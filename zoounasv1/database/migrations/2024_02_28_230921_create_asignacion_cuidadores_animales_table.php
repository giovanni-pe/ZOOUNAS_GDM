<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignacionCuidadoresAnimalesTable extends Migration
{
    public function up()
    {
        Schema::create('asignacion_cuidadores_animales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cuidador_id');
            $table->unsignedBigInteger('animal_id');
            $table->foreign('cuidador_id')->references('id')->on('cuidadores');
            $table->foreign('animal_id')->references('id')->on('animales');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('asignacion_cuidadores_animales');
    }
}