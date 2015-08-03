@extends('index3')
@section('pagina_titulo')
    Servicios
@stop
@section('url_historial')
    <li>{{ link_to_route('home','Inicio') }}</li>
    <li>Servicios</li>
@stop
@section('contenido')
    {{ Form::open( ['route' => 'politicasPrecio.store','method' => 'POST'],['role' => 'form','id'=>'frm-politica_precio']) }}
        <div class="form-group">
            <div class="col-md-12">@include('politicasPrecio.partials.productos')</div>
        </div>
        <div class="form-group">
            {{ Form::label('id_cliente','Clientes', ['class'=>'control-label col-md-2']) }}
            <div class="col-md-2">
                {{ Form::select('id_cliente', $clientes, ['class'=>'']); }}
            </div>
        <div>
        <div class="form-group">
            {{ Form::label('id_producto','Producto', ['class'=>'control-label col-md-2']) }}
            <div class="col-md-2">
                {{ Form::select('id_producto', ['1'=>'M5','2'=>'R.ESP','3'=>'FLETE','4'=>'BOLSA','5'=>'AG 5'], ['class'=>'']); }}
            </div>
        <div>
        <div class="form-group">
            {{ Form::label('cantidad','Cantidad', ['class'=>'control-label col-md-2']) }}
            <div class="col-md-2">
                {{ Form::text('cantidad','', ['class'=>'form-control spinner']); }}
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('id_frecuencia','Frecuencia', ['class'=>'control-label col-md-2']) }}
            <div class="col-md-2">
                {{ Form::select('id_frecuencia', ['1'=>'LLAMAM','2'=>'Esporadico','3'=>'Los 25 de cada'], ['class'=>'form-control']); }}
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <label class="checkbox-inline">
                    <span>Lunes</span>{{ Form::checkbox('lunes','1', ['class'=>'checkbox style-0']); }}
                </label>
                <label class="checkbox-inline">
                    <span>Martes</span>{{ Form::checkbox('martes','1', ['class'=>'checkbox style-0']); }}
                </label>
                <label class="checkbox-inline">
                    <span>Miercoles</span>{{ Form::checkbox('miercoles','1', ['class'=>'checkbox style-0']); }}
                </label>
                <label class="checkbox-inline">
                    <span>Jueves</span>{{ Form::checkbox('jueves','1', ['class'=>'checkbox style-0']); }}
                </label>
                <label class="checkbox-inline">
                    <span>Viernes</span>{{ Form::checkbox('viernes','1', ['class'=>'checkbox style-0']); }}
                </label>
                <label class="checkbox-inline">
                    <span>Sabado</span>{{ Form::checkbox('sabado','1', ['class'=>'checkbox style-0']); }}
                </label>
                <label class="checkbox-inline">
                    <span>Domingo</span>{{ Form::checkbox('domingo','1', ['class'=>'checkbox style-0']); }}
                </label>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6">
                <div class="row form-group">
                    <div class="col-md-6">Cantidad Menor a</div>
                    <div class="col-md-6">El precio es igual a</div>
                </div>
                <div class="row form-group">
                    <div class="col-md-6">{{ Form::text('politicas_cantidad[1][cantidad]','', ['class'=>'form-control spinner']); }}</div>
                    <div class="col-md-6">{{ Form::text('politicas_cantidad[1][cuota]','', ['class'=>'form-control spinner-decimal']); }}</div>
                </div>
                <div class="row form-group">
                    <div class="col-md-6">{{ Form::text('politicas_cantidad[2][cantidad]','', ['class'=>'form-control spinner']); }}</div>
                    <div class="col-md-6">{{ Form::text('politicas_cantidad[2][cuota]','', ['class'=>'form-control spinner-decimal']); }}</div>
                </div>
                <div class="row form-group">
                    <div class="col-md-6">{{ Form::text('politicas_cantidad[3][cantidad]','', ['class'=>'form-control spinner']); }}</div>
                    <div class="col-md-6">{{ Form::text('politicas_cantidad[3][cuota]','', ['class'=>'form-control spinner-decimal']); }}</div>
                </div>
                <div class="row form-group">
                    <div class="col-md-6">{{ Form::text('politicas_cantidad[4][cantidad]','', ['class'=>'form-control spinner']); }}</div>
                    <div class="col-md-6">{{ Form::text('politicas_cantidad[4][cuota]','', ['class'=>'form-control spinner-decimal']); }}</div>
                </div>
                <div class="row form-group">
                    <div class="col-md-6">{{ Form::text('politicas_cantidad[5][cantidad]','', ['class'=>'form-control spinner']); }}</div>
                    <div class="col-md-6">{{ Form::text('politicas_cantidad[5][cuota]','', ['class'=>'form-control spinner-decimal']); }}</div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row form-group">
                    <div class="col-md-6">Toneladas Menor a</div>
                    <div class="col-md-6">El precio es igual a</div>
                </div>
                <div class="row form-group">
                    <div class="col-md-6">{{ Form::text('politicas_peso[1][cantidad]','', ['class'=>'form-control spinner']); }}</div>
                    <div class="col-md-6">{{ Form::text('politicas_peso[1][cuota]','', ['class'=>'form-control spinner-decimal']); }}</div>
                </div>
                <div class="row form-group">
                    <div class="col-md-6">{{ Form::text('politicas_peso[2][cantidad]','', ['class'=>'form-control spinner']); }}</div>
                    <div class="col-md-6">{{ Form::text('politicas_peso[2][cuota]','', ['class'=>'form-control spinner-decimal']); }}</div>
                </div>
                <div class="row form-group">
                    <div class="col-md-6">{{ Form::text('politicas_peso[3][cantidad]','', ['class'=>'form-control spinner']); }}</div>
                    <div class="col-md-6">{{ Form::text('politicas_peso[3][cuota]','', ['class'=>'form-control spinner-decimal']); }}</div>
                </div>
                <div class="row form-group">
                    <div class="col-md-6">Cuota Mensual</div>
                    <div class="col-md-6">{{ Form::text('cuota','', ['class'=>'form-control spinner-decimal']); }}</div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        {{ Form::button('Historico', ['class'=>'btn btn-default']) }}
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-4">
                {{ Form::button('Confirmar', ['type'=>'submit', 'class'=>'btn btn-primary','id'=>'btn-guardar']) }}
            </div>
        </div>
    {{ Form::close() }}
@stop
@section('js')
    <script type="text/javascript">
        $(document).ready(function () {

            var oTable = $('#dt-productos').DataTable({
                "bProcessing": true,
                "sAjaxSource": "{{URL::route('politicasPrecio.listado')}}",
                "aoColumns": [
                    {
                        "mData": "producto"
                    },
                    {
                        "mData": "cliente"
                    },
                    {
                        "mData": "frecuencia"
                    },
                    {
                        "mData": "cantidad"
                    },
                    {
                        "mData": "abono"
                    },
                    {
                        "mData": "acciones",
                        "mRender": function(data, type, full){
                            var button;
                            button = '<input type="button" class="btn   btn-default" id="btn-cargar-info" value="Ver">';

                            return button;

                        }
                    }
                ],
                "columnDefs": [
                    { "type": "html", "targets": 1 }
                ],
                "language": {"url": "{{URL::asset('datatables/json/dataTables.lang.es.json')}}"},
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "Todo"]
                ],
                "iDisplayLength": -1,
                "sDom":
                "<'dt-toolbar'" +
                "<'col-sm-6'l>" +
                "<'col-sm-6'f>" +
                "r" +
                ">" +
                "t" +
                "<'dt-toolbar-footer'<'col-xs-6'i><'col-xs-6'p>>"
            });

            $("#dt-productos thead th input[type=text]").on('keyup change', function () {

                oTable
                        .column($(this).parent().index() + ':visible')
                        .search(this.value)
                        .draw();

            });

            $(".spinner-decimal").spinner({
                step: 0.01,
                numberFormat: "n"
            });
            $(".spinner").spinner({min:0});

            $("#id_producto, #id_frecuencia").select2();

            $('#btn-guardar').click(function(e){

            });

        });
    </script>
@stop