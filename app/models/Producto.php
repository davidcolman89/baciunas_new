<?php

class Producto extends \Eloquent {
	protected $fillable = [
		'id_cliente',
		'producto',
		'id_tipo_producto',
	];
}