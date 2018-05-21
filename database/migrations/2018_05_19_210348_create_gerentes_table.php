<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGerentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gerentes', function(Blueprint $table)
		{
            $table->increments('id');
            $table->integer('persona_id');
            $table->string('firme');
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
        Schema::drop('gerentes');
    }
}
