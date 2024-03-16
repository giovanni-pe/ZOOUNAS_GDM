<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalesTable extends Migration
{
    public function up()
    {
        Schema::create('animales', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('especie');
            $table->date('fecha_nacimiento');
            $table->string('genero');
            $table->decimal('peso', 8, 2);
            $table->date('fecha_ingreso');
            $table->string('estado_salud');
            $table->text('historial_medico')->nullable();
            $table->unsignedBigInteger('area_id');
            $table->foreign('area_id')->references('id')->on('areas');
            $table->boolean('apadrinado')->default(false);
            $table->unsignedBigInteger('cliente_id')->nullable();
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('animales');
    }
}
