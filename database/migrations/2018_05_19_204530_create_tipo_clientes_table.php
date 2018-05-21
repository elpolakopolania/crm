<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\TipoCliente;

class CreateTipoClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipos_clientes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->char('codigo', 2)->unique();
            $table->string('nombre');
            $table->integer('estado')->comment('O inactivo, 1 activo')->default(1);
			$table->timestamps();
        });
        
        // Organizar datos.
		$tipos_clientes = [
			['codigo' => 'P','nombre' => 'Prospecto',],
			['codigo' => 'C','nombre' => 'Cliente']
		];
		// Insertar datos
		foreach ($tipos_clientes as $indice => $tipo_cliente) {
			TipoCliente::create($tipo_cliente);
		}
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tipos_clientes');
    }
}
