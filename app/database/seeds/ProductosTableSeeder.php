<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ProductosTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 50) as $index)
		{
			Producto::create([
				'id_cliente'=>$faker->numberBetween(1,10),
				'producto'=>$faker->word,
				'id_tipo_producto'=>$faker->numberBetween(1,10)
			]);
		}
	}

}