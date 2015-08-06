<?php

class PoliticaPrecio extends \Eloquent {
	protected $fillable = [
		'id_producto',
		'id_frecuencia',
		'id_cliente',
		'cantidad',
		'cuota',
		'lunes',
		'martes',
		'miercoles',
		'jueves',
		'viernes',
		'sabado',
		'domingo',
		'abono',
	];
	protected $table = 'politica_precio';

	public function politicasCantidad()
	{
		return $this->hasMany('PoliticaCantidad', 'id_politica_precio', 'id')->orderBy('id','asc');
	}

	public function politicasPeso()
	{
		return $this->hasMany('PoliticaPeso', 'id_politica_precio', 'id')->orderBy('id','asc');
	}

	public function producto()
	{
		return $this->hasOne('Producto', 'id', 'id_producto');
	}

	public function frecuencia()
	{
		return $this->hasOne('PoliticaPrecioFrecuencias', 'id', 'id_frecuencia');
	}

	public function cliente()
	{
		return $this->belongsTo('Cliente','id_cliente','id');
	}


}