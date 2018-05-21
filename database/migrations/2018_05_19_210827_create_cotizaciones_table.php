<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCotizacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cotizaciones', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('cliente_id');
            $table->string('ciudad');
            $table->longText('contenido');            
            $table->integer('empresa_id');
            $table->string('forma_pago');
            $table->decimal('valor_total', 10, 2);
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
        Schema::drop('cotizaciones');
    }
}
