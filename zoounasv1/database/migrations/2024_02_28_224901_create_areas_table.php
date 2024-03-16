<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreasTable extends Migration
{
    public function up()
    {
        Schema::create('areas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_area');
            $table->text('descripcion_area');
            $table->integer('capacidad_maxima');
            $table->integer('capacidad_actual');
            $table->string('tipo_ambiente');
            $table->decimal('temperatura_promedio', 5, 2);
            $table->decimal('humedad_promedio', 5, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('areas');
    }
}
