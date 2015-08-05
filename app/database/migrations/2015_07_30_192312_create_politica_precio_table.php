<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoliticaPrecioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('politica_precio', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_cliente');
			$table->integer('id_producto');
			$table->integer('id_frecuencia');
			$table->integer('cantidad');
			$table->decimal('cuota', 5, 2);
			$table->boolean('lunes');
			$table->boolean('martes');
			$table->boolean('miercoles');
			$table->boolean('jueves');
			$table->boolean('viernes');
			$table->boolean('sabado');
			$table->boolean('domingo');
			$table->boolean('abono');
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
		Schema::drop('politica_precio');
	}

}
