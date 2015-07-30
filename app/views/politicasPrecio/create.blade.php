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
            {{ Form::label('id_producto','Producto', ['class'=>'col-md-1 control-label']) }}
            <div class="col-md-3">
                {{ Form::select('id_producto', ['1'=>'M5','2'=>'R.ESP','3'=>'FLETE','4'=>'BOLSA','5'=>'AG 5'], ['class'=>'form-control']); }}
            </div>
            {{ Form::label('cantidad','Cantidad', ['class'=>'col-md-1 control-label']) }}
            <div class="col-md-3">
                {{ Form::text('cantidad','', ['class'=>'form-control']); }}
            </div>
            {{ Form::label('id_frecuencia','Frecuencia', ['class'=>'col-md-1 control-label']) }}
            <div class="col-md-3">
                {{ Form::select('id_frecuencia', ['1'=>'LLAMAM','2'=>'Esporadico','3'=>'Los 25 de cada'], ['class'=>'form-control']); }}
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-1">
                {{ Form::label('chk-dias','Lunes') }}
                {{ Form::checkbox('chk-dias','', ['class'=>'form-control']); }}
            </div>
            <div class="col-md-1">
                {{ Form::label('chk-dias','Martes') }}
                {{ Form::checkbox('chk-dias','', ['class'=>'form-control']); }}
            </div>
            <div class="col-md-1">
                {{ Form::label('chk-dias','Miercoles') }}
                {{ Form::checkbox('chk-dias','', ['class'=>'form-control']); }}
            </div>
            <div class="col-md-1">
                {{ Form::label('chk-dias','Jueves') }}
                {{ Form::checkbox('chk-dias','', ['class'=>'form-control']); }}
            </div>
            <div class="col-md-1">
                {{ Form::label('chk-dias','Viernes') }}
                {{ Form::checkbox('chk-dias','', ['class'=>'form-control']); }}
            </div>
            <div class="col-md-1">
                {{ Form::label('chk-dias','Sabado') }}
                {{ Form::checkbox('chk-dias','', ['class'=>'form-control']); }}
            </div>
            <div class="col-md-1">
                {{ Form::label('chk-dias','Domingo') }}
                {{ Form::checkbox('chk-dias','', ['class'=>'form-control']); }}
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6">
                <div class="row form-group">
                    <div class="col-md-6">Cantidad Menor a</div>
                    <div class="col-md-6">El precio es igual a</div>
                </div>
                <div class="row form-group">
                    <div class="col-md-6">{{ Form::text('','', ['class'=>'form-control']); }}</div>
                    <div class="col-md-6">{{ Form::text('','', ['class'=>'form-control']); }}</div>
                </div>
                <div class="row form-group">
                    <div class="col-md-6">{{ Form::text('','', ['class'=>'form-control']); }}</div>
                    <div class="col-md-6">{{ Form::text('','', ['class'=>'form-control']); }}</div>
                </div>
                <div class="row form-group">
                    <div class="col-md-6">{{ Form::text('','', ['class'=>'form-control']); }}</div>
                    <div class="col-md-6">{{ Form::text('','', ['class'=>'form-control']); }}</div>
                </div>
                <div class="row form-group">
                    <div class="col-md-6">{{ Form::text('','', ['class'=>'form-control']); }}</div>
                    <div class="col-md-6">{{ Form::text('','', ['class'=>'form-control']); }}</div>
                </div>
                <div class="row form-group">
                    <div class="col-md-6">{{ Form::text('','', ['class'=>'form-control']); }}</div>
                    <div class="col-md-6">{{ Form::text('','', ['class'=>'form-control']); }}</div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row form-group">
                    <div class="col-md-6">Toneladas Menor a</div>
                    <div class="col-md-6">El precio es igual a</div>
                </div>
                <div class="row form-group">
                    <div class="col-md-6">{{ Form::text('','', ['class'=>'form-control']); }}</div>
                    <div class="col-md-6">{{ Form::text('','', ['class'=>'form-control']); }}</div>
                </div>
                <div class="row form-group">
                    <div class="col-md-6">{{ Form::text('','', ['class'=>'form-control']); }}</div>
                    <div class="col-md-6">{{ Form::text('','', ['class'=>'form-control']); }}</div>
                </div>
                <div class="row form-group">
                    <div class="col-md-6">{{ Form::text('','', ['class'=>'form-control']); }}</div>
                    <div class="col-md-6">{{ Form::text('','', ['class'=>'form-control']); }}</div>
                </div>
                <div class="row form-group">
                    <div class="col-md-6">Cuota Mensual</div>
                    <div class="col-md-6">{{ Form::text('','', ['class'=>'form-control']); }}</div>
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

            $("#id_producto, #id_frecuencia").select2();

            $('#btn-guardar').click(function(e){
                e.preventDefault();
                var data = $('#frm-politica_precio').serialize();

                $.ajax({
                    type:'POST',
                    url:'{{ route('politicasPrecio.store') }}',
                    data:data
                }).done(function(){
                    
                });
            });

        });
    </script>
@stop