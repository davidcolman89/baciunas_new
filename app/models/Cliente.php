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
}