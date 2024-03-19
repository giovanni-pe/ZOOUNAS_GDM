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
        Schema::create('api_customers', function (Blueprint $table) {
            $table->id();
            $table->string('customer_document_type');
            $table->string('customer_document_number');
            $table->string('customer_full_name');
            // Agrega más campos según sea necesario
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
        Schema::dropIfExists('api_customers');
    }
};
