<?php

class Cliente extends \Eloquent {
	protected $fillable = [
		'razon_social',
		'razon_comercial',
		'cuit',
		'url_web',
		'numero_ceamse',
		'observaciones',
	];

	protected $table = 'clientes';

	public function servicios()
	{
		return $this->hasMany('Servicio', 'id_cliente', 'id');
	}

	public function politicasPrecio()
	{
		return $this->hasMany('PoliticaPrecio', 'id_cliente', 'id');
	}

	public function productos()
	{
		return $this->hasMany('Producto', 'id_cliente', 'id');
	}

}