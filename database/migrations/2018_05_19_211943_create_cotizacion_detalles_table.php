<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCotizacionDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cotizacion_detalles', function(Blueprint $table)
		{
            $table->increments('id');
            $table->integer('empresa_id');
            $table->integer('cotizacion_id');
            $table->integer('articulo_id');
            $table->integer('cantidad');
            $table->decimal('valor_unitario', 10, 2);
            $table->decimal('valor_total', 10, 2);
            $table->decimal('iva', 10, 2);
            $table->decimal('ipoconsumo', 10, 2);
            $table->integer('garantia')->comment('Garantía en días.')->default(1);
            $table->integer('estado')->comment('O inactivo, 1 activo')->default(1);
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
        Schema::drop('cotizacion_detalles');
    }
}
