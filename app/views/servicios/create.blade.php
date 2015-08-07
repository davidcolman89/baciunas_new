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
        <div class="form-group">
            {{ Form::label('id_cliente','Cliente', ['class'=>'control-label col-md-1']) }}
            <div class="col-md-2">
                <div class="row">
                    {{ Form::select('id_cliente', $comboClientes, ['class'=>'form-control']); }}
                </div>
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('fecha_servicio','Fecha', ['class'=>'control-label col-md-1']) }}
            <div class="col-md-2">
                {{ Form::text('fecha_servicio',null,['class'=>'form-control']) }}
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('id_producto','Producto', ['class'=>'control-label col-md-2']) }}
            <div class="col-md-10">
                {{ Form::select('id_producto',$productos, ['class'=>'form-control']); }}
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
                {{ Form::label('direccion','Dirección del Servicio') }}
                {{ Form::text('direccion',null,['class'=>'form-control']) }}
            </div>
        </div>
        <div class="form-group">
                <div class="col-md-4">
                    {{ Form::label('id_estado','Estado') }}
                    {{ Form::select('id_estado', ['1'=>'opcion 1'], ['class'=>'form-control']); }}
                </div>
        </div>
        <div class="form-group">
                <div class="col-md-4">
                    {{ Form::label('observaciones','Observaciones') }}
                    {{ Form::textarea('observaciones',null,['class'=>'form-control']) }}
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
                <div class="col-md-4">
                    {{ Form::label('fecha_factura','Fecha Factura') }}
                    {{ Form::text('fecha_factura',null,['class'=>'form-control']) }}
                </div>
        </div>
        <div class="form-group">
                <div class="col-md-4">
                    modificado por
                </div>
                <div class="col-md-4">
                    fecha modificacion
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-4">
                {{ Form::button(isset($buttonText)?$buttonText:'Guardar', ['type'=>'submit','class'=>'btn btn-primary']) }}
            </div>
        </div>
    {{ Form::close() }}
@stop
@section('js')
    <script type="text/javascript">
        $(document).ready(function () {

            $("#fecha_servicio").datepicker({
                dateFormat: 'yy-mm-dd'
            });
            $("#fecha_factura").datepicker({
                dateFormat: 'yy-mm-dd'
            });
            $("#id_estado, #id_producto, #id_cliente").select2({containerCssClass:'col-md-12',});

        });
    </script>
@stop