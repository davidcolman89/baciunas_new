<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoliticaCantidadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('politica_cantidad', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_politica_precio');
			$table->integer('cantidad');
			$table->decimal('cuota', 10, 2);
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
		Schema::drop('politica_cantidad');
	}

}
