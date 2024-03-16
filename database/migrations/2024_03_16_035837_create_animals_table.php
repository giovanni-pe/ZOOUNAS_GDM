<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('species');
            $table->date('birth_date');
            $table->unsignedBigInteger('habitat_id');
            $table->timestamps();

            $table->foreign('habitat_id')->references('id')->on('habitats')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('animals');
    }
}
