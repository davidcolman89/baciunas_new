<?php

class TipoProducto extends \Eloquent {
	protected $fillable = ['codigo','tipo'];
	protected $table = 'tipos_producto';
}