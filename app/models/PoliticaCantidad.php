<?php

class PoliticaCantidad extends \Eloquent {
	protected $fillable = ['cuota','cantidad','id_politica_precio'];
	protected $table = 'politica_cantidad';

	public function politicaPrecio()
	{
		return $this->belongsTo('PoliticaPrecio');
	}
}