<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class TiposProductoTableSeeder extends Seeder {

	public function run()
	{
		$tiposProductos = [
			['codigo'=>'CONT','tipo'=>'Contenedores'],
			['codigo'=>'INSU','tipo'=>'Insumos'],
			['codigo'=>'SERV','tipo'=>'Servicios'],
			['codigo'=>'DETA','tipo'=>'Detalle'],
		];

		foreach($tiposProductos as $tipoProducto) TipoProducto::create($tipoProducto);

	}

}