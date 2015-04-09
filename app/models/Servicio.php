<?php

class Servicio extends \Eloquent {
    protected $table = "servicios";
	protected $fillable = [
        "id_cliente"
        ,"fecha_servicio"
        ,"id_producto"
        ,"contenedores"
        ,"kilos"
        ,"direccion_servicio"
        ,"id_estado"
        ,"observaciones"
        ,"muestra_observaciones"
        ,"numero_manifiesto"
        ,"numero_cr"
        ,"numero_factura"
        ,"fecha_factura"
    ];
}