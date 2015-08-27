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
            <div class="col-md-6">
                <div class="form-group">
                    {{ Form::label('id_cliente','Selecccionar Cliente:', ['class'=>'control-label col-md-2']) }}
                    <div class="col-md-6">
                        {{ Form::select('id_cliente', $clientes, '',['class'=>'form-control']); }}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12"><br></div>
                </div>
                <div class="form-group">
                    {{ Form::label('fecha_servicio','Fecha', ['class'=>'control-label col-md-2']) }}
                    <div class="col-md-4">
                        {{ Form::text('fecha_servicio','',['class'=>'form-control']) }}
                    </div>
                    {{ Form::label('id_producto','Producto', ['class'=>'control-label col-md-2']) }}
                    <div class="col-md-4">
                        {{ Form::select('id_producto',[], '', ['class'=>'form-control']); }}
                    </div>
                </div>
                <div class="form-group"><div class="col-md-12"><br></div></div>
                <div class="form-group">
                    {{ Form::label('contenedores','Cantidad Contenedores', ['class'=>'control-label col-md-2']) }}
                    <div class="col-md-4">
                        {{ Form::text('contenedores',null,['class'=>'form-control']) }}
                    </div>
                    {{ Form::label('kilos','Cantidad de Kilos', ['class'=>'control-label col-md-2']) }}
                    <div class="col-md-4">
                        {{ Form::text('kilos',null,['class'=>'form-control']) }}
                    </div>
                </div>
                <div class="form-group"><div class="col-md-12"><br></div></div>
                <div class="form-group">
                    {{ Form::label('direccion','Dirección del Servicio', ['class'=>'control-label col-md-2']) }}
                    <div class="col-md-4">
                        {{ Form::text('direccion',null,['class'=>'form-control']) }}
                    </div>
                    {{ Form::label('id_estado','Estado', ['class'=>'control-label col-md-2']) }}
                    <div class="col-md-4">
                        {{ Form::select('id_estado', $estados, '', ['class'=>'form-control']); }}
                    </div>
                </div>
                <div class="form-group"><div class="col-md-12"><br></div></div>
                <div class="form-group">
                    {{ Form::label('numero_manifiesto','Num. Manifiesto', ['class'=>'control-label col-md-2']) }}
                    <div class="col-md-4">
                        {{ Form::text('numero_manifiesto',null,['class'=>'form-control']) }}
                    </div>
                    {{ Form::label('numero_cr','Num. CR', ['class'=>'control-label col-md-2']) }}
                    <div class="col-md-4">
                        {{ Form::text('numero_cr',null,['class'=>'form-control']) }}
                    </div>
                </div>
                <div class="form-group"><div class="col-md-12"><br></div></div>
                <div class="form-group">
                    {{ Form::label('numero_factura','N° Factura', ['class'=>'control-label col-md-2']) }}
                    <div class="col-md-4">
                        {{ Form::text('numero_factura',null,['class'=>'form-control']) }}
                    </div>
                    {{ Form::label('fecha_factura','Fecha Factura', ['class'=>'control-label col-md-2']) }}
                    <div class="col-md-4">
                        {{ Form::text('fecha_factura',null,['class'=>'form-control']) }}
                    </div>
                </div>
                <div class="form-group"><div class="col-md-12"><br></div></div>
                <div class="form-group">
                    {{ Form::label('muestra_observaciones','Muestra Observaciones al Facturar?', ['class'=>'control-label col-md-5']) }}
                    <div class="col-md-1">
                        {{ Form::checkbox('muestra_observaciones',null,['class'=>'form-control']) }}
                    </div>
                </div>
                <div class="form-group"><div class="col-md-12"><br></div></div>
                <div class="form-group">
                    {{ Form::label('observaciones','Observaciones', ['class'=>'control-label col-md-12']) }}
                    <div class="col-md-12">
                        {{ Form::textarea('observaciones',null,['class'=>'form-control']) }}
                    </div>
                </div>
                <div class="form-group"><div class="col-md-12"><br></div></div>
                <div class="form-group">
                    <div class="col-md-4">
                        modificado por
                    </div>
                    <div class="col-md-4">
                        fecha modificacion
                    </div>
                </div>
                <div class="form-group"><div class="col-md-12"><br></div></div>
                <div class="form-group">
                    <div class="col-md-12">
                        {{ Form::button(isset($buttonText)?$buttonText:'Guardar', ['type'=>'submit','class'=>'btn btn-primary']) }}
                    </div>
                </div>
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
            //$("#id_estado, #id_producto, #id_cliente").select2({containerCssClass:'col-md-12',});

        });
    </script>
@stop