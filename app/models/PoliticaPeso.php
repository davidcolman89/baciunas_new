<?php

class PoliticaPeso extends \Eloquent {
	protected $fillable = [];
	protected $table = 'politica_peso';

	public function politicaPrecio()
	{
		return $this->belongsTo('PoliticaPrecio');
	}
}