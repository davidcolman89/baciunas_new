<?php

class Servicio extends \Eloquent {
    protected $table = "servicios";
	protected $fillable = [
        'id_cliente',
        'id_producto',
        'id_estado',
        'id_usuario_modificacion',
        'fecha_servicio',
        'fecha_factura',
        'contenedores',
        'kilos',
        'direccion',
        'observaciones',
        'muestra_observaciones',
        'numero_manifiesto',
        'numero_cr',
        'numero_factura',
    ];

    public function cliente()
    {
        return $this->belongsTo('Cliente','id_cliente','id');
    }
}