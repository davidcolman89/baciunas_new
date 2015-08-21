<?php

class TipoProducto extends \Eloquent {
	protected $fillable = ['codigo','tipo'];
	protected $table = 'tipos_producto';

	public function producto()
	{
		return $this->belongsTo('Producto', 'id', 'id_tipo_producto');
	}
}