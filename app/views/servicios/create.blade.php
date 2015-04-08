@extends('index3')
@section('pagina_titulo')
    Servicios
@stop
@section('url_historial')
    <li>{{ link_to_route('home','Inicio') }}</li>
    <li>Servicios</li>
@stop
@section('contenido')
    {{ Form::open( ['route' => 'servicios.store','method' => 'POST'],['role' => 'form']) }}
        <div class="row">
            <div class="form-group">
                <div class="col-md-4">
                    ID
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-4">
                    {{ Form::label('id_cliente','Cliente') }}
                    {{ Form::text('id_cliente',null,['class'=>'form-control']) }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-4">
                    {{ Form::label('fecha_servicio','Fecha') }}
                    {{ Form::text('fecha_servicio',null,['class'=>'form-control']) }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-4">
                    {{ Form::label('id_producto','Producto') }}
                    {{ Form::select('id_producto', []); }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-4">
                    {{ Form::label('contenedores','Cantidad Contenedores') }}
                    {{ Form::text('contenedores',null,['class'=>'form-control']) }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-4">
                    {{ Form::label('kilos','Cantidad de Kilos') }}
                    {{ Form::text('kilos',null,['class'=>'form-control']) }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-4">
                    {{ Form::label('direccion_servicio','Dirección del Servicio') }}
                    {{ Form::text('direccion_servicio',null,['class'=>'form-control']) }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-4">
                    {{ Form::label('id_estado','Estado') }}
                    {{ Form::select('id_estado', []); }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-4">
                    {{ Form::label('observaciones','Observaciones') }}
                    {{ Form::text('observaciones',null,['class'=>'form-control']) }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-4">
                    {{ Form::label('','') }}
                    {{ Form::text('',null,['class'=>'form-control']) }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-4">
                    {{ Form::label('muestra_observaciones','Muestra Observaciones al Facturar?') }}
                    {{ Form::checkbox('muestra_observaciones',null,['class'=>'form-control']) }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-4">
                    {{ Form::label('numero_manifiesto','Num. Manifiesto') }}
                    {{ Form::text('numero_manifiesto',null,['class'=>'form-control']) }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-4">
                    {{ Form::label('numero_cr','Num. CR') }}
                    {{ Form::text('numero_cr',null,['class'=>'form-control']) }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-4">
                    {{ Form::label('numero_factura','N° Factura') }}
                    {{ Form::text('numero_factura',null,['class'=>'form-control']) }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-4">
                    {{ Form::label('fecha_factura','Fecha Factura') }}
                    {{ Form::text('fecha_factura',null,['class'=>'form-control']) }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-4">
                    modificado por
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-4">
                    fecha modificacion
                </div>
            </div>

        </div>
    {{ Form::close() }}
@stop
@section('js')
    <script type="text/javascript">
        $(document).ready(function () {
            $("#link-guardar-cliente").click(function(){});
        });
    </script>
@stop