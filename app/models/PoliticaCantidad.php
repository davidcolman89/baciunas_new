<?php

class PoliticaCantidad extends \Eloquent {
	protected $fillable = [];
	protected $table = 'politica_cantidad';

	public function politicaPrecio()
	{
		return $this->belongsTo('PoliticaPrecio');
	}
}