<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServiciosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('servicios', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_cliente');
			$table->integer('id_producto');
			$table->integer('contenedores');
			$table->integer('kilos');
			$table->text('direccion');
			$table->integer('estado');
			$table->text('observaciones');
			$table->increments('muestra_observaciones');
			$table->string('numero_manifiesto');
			$table->string('numero_cr');
			$table->integer('numero_factura');
			$table->date('fecha_factura');
			$table->integer('id_usuario_modificacion');
			$table->date('fecha_modificacion');
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
		Schema::drop('servicios');
	}

}
