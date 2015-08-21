<?php

class Producto extends \Eloquent {
	protected $fillable = [
		'id_cliente',
		'producto',
		'id_tipo_producto',
	];

	public function tipoProducto()
	{
		return $this->hasOne('TipoProducto', 'id', 'id_tipo_producto');
	}

	public function cliente()
	{
		return $this->belongsTo('Cliente', 'id_cliente', 'id');
	}

}