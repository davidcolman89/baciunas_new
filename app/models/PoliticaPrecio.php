<?php

class PoliticaPrecio extends \Eloquent {
	protected $fillable = [
		'id_producto',
		'id_frecuencia',
		'cantidad',
		'cuota',
		'lunes',
		'martes',
		'miercoles',
		'jueves',
		'viernes',
		'sabado',
		'domingo',
	];
	protected $table = 'politica_precio';

	public function politicaCantidad()
	{
		return $this->hasMany('PoliticaCantidad', 'id_politica_precio', 'id');
	}

	public function politicaPeso()
	{
		return $this->hasMany('PoliticaPeso', 'id_politica_precio', 'id');
	}


}