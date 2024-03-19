<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->decimal('price', 8, 2);
            $table->integer('quantity_available');
            $table->unsignedBigInteger('customer_id'); // Debes definir la columna para la clave foránea
        
            // Definir la relación de clave externa
            $table->foreign('customer_id')
                  ->references('id')
                  ->on('api_customers')
                  ->onDelete('cascade'); // Esto borrará los tickets si se borra el cliente asociado
        
            $table->timestamps();
        });
        
    }

    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}