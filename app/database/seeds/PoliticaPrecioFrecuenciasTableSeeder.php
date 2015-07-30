<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PoliticaPrecioFrecuenciasTableSeeder extends Seeder {

	public function run()
	{
		$frecuencias = [
			['frecuencia'=>'LLAMAM'],
			['frecuencia'=>'Esporadico'],
			['frecuencia'=>'Los 25 de cada'],
		];

		foreach($frecuencias as $frecuencia) PoliticaPrecioFrecuencias::create($frecuencia);


	}

}