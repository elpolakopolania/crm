<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function(Blueprint $table)
		{
            $table->increments('id');
            $table->integer('empresa_id');
            $table->integer('tipo_detalle_id');
			$table->string('codigo');
            $table->string('nombre');
            $table->longText('descripcion');            
            $table->decimal('valor_total', 10, 2);
            $table->decimal('iva', 10, 2);
            $table->decimal('ipoconsumo', 10, 2);
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
        Schema::drop('articulos');
    }
}
