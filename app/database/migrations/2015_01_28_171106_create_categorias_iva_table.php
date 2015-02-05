<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoriasIvaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('categorias_iva', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('descripcion');
			$table->string('abreviacion');
			$table->string('letra_factura');
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
		Schema::drop('categorias_iva');
	}

}
