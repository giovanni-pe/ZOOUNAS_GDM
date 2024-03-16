<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuidadoresTable extends Migration
{
    public function up()
    {
        Schema::create('cuidadores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('edad');
            $table->string('genero');
            $table->string('telefono', 15);
            $table->string('direccion', 100);
            $table->string('correo_electronico', 100);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cuidadores');
    }
}
