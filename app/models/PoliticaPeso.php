<?php

class PoliticaPeso extends \Eloquent {
	protected $fillable = ['cuota','cantidad','id_politica_precio'];
	protected $table = 'politica_peso';

	public function politicaPrecio()
	{
		return $this->belongsTo('PoliticaPrecio');
	}
}