<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function(Blueprint $table)
		{
            $table->increments('id');
            $table->integer('gerente_id');
            $table->string('nombre');
            $table->string('descripcion');
			$table->integer('tipoIdent_id');
            $table->bigInteger('numIdent');
            $table->string('pais');
            $table->string('ciudad');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('celular');
            $table->string('correo');
            $table->string('redes');
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
        Schema::drop('empresas');
    }
}
