<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombres');
			$table->string('apellidos');
			$table->integer('tipoIdent_id');
			$table->bigInteger('numIdent');
            $table->string('telefono');
            $table->string('celular');
            $table->string('correo');
			$table->date('fechaNac');
            $table->char('genero', 1);
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
        Schema::drop('clientes');
    }
}
