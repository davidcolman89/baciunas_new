<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDireccionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('direcciones', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('tipo');
			$table->string('calle');
			$table->string('numero');
			$table->string('departamento');
			$table->string('parcela');
			$table->string('latitud');
			$table->string('longitud');
			$table->string('codigo_postal');
			$table->string('entre_calle_1');
			$table->string('entre_calle_2');
			$table->text('observaciones');
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
		Schema::drop('direcciones');
	}

}
