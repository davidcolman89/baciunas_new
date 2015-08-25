@extends('index3')
@section('pagina_titulo')
    Servicios
@stop
@section('url_historial')
    <li>{{ link_to_route('home','Inicio') }}</li>
    <li>Servicios</li>
@stop
@section('contenido')
    {{ Form::open( ['route' => 'politicasPrecio.store','method' => 'POST','id'=>'frm-politica-precio'],['role' => 'form']) }}
    <div class="form-group">
        {{ Form::label('id_cliente','Selecccionar Cliente:', ['class'=>'control-label col-md-1']) }}
        <div class="col-md-6">
            <div class="row">
                {{ Form::select('id_cliente', $clientes, ['class'=>'form-control']); }}
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-12"><br></div>
    </div>
    <div class="form-group">
        <div class="col-md-12">@include('politicasPrecio.partials.productos')</div>
    </div>
    <div class="form-group">
        <div class="col-md-4">Producto</div>
        <div class="col-md-1">Cantidad</div>
        <div class="col-md-1">Cuota Mensual</div>
        <div class="col-md-1">Cantidad Menor a</div>
        <div class="col-md-1">Presio</div>
        <div class="col-md-1">Toneladas Menor a</div>
        <div class="col-md-1">Precio</div>
    </div>
    <div class="form-group"><div class="col-md-12"><br></div></div>
    <div class="form-group">
        <div class="col-md-4">{{ Form::select('id_producto',[], '',['class'=>'form-control','id'=>'id_producto']); }}</div>
        <div class="col-md-1">{{ Form::text('cantidad','', ['class'=>'form-control spinner']); }}</div>
        <div class="col-md-1">{{ Form::text('cuota','', ['class'=>'form-control spinner-decimal']); }}</div>
        <div class="col-md-1">{{ Form::text('cantidad_menor','', ['class'=>'form-control spinner']); }}</div>
        <div class="col-md-1">{{ Form::text('cantidad_menor_precio','', ['class'=>'form-control spinner-decimal']); }}</div>
        <div class="col-md-1">{{ Form::text('tonelada_menor','', ['class'=>'form-control spinner']); }}</div>
        <div class="col-md-1">{{ Form::text('tonelada_menor_precio','', ['class'=>'form-control spinner-decimal']); }}</div>
    </div>
    <div class="form-group"><div class="col-md-12"><br></div></div>
    <div class="form-group">
        <div class="col-md-1">{{ Form::button('Historico', ['class'=>'btn btn-default']) }}</div>
        <div class="col-md-1">{{ Form::button('Confirmar', ['type'=>'submit', 'class'=>'btn btn-danger','id'=>'btn-guardar']) }}</div>
        <div class="col-md-1">{{ Form::hidden('_method','post') }}</div>
    </div>
    {{ Form::close() }}
@stop
@section('js')
    <script type="text/javascript">
        var datatablePoliticas;
        var selectClientes;
        var selectProductos;
        var selectFrecuencias;
        var selectOptions = {
            theme: "bootstrap",
            width:"style",
            data:'',
            placeholder:''
        };

        function getPoliticasByCliente(idCliente) {
            var url = 'byCliente/' + idCliente;
            return datatablePoliticas.ajax.url(url);
        }
        function completarFormPoliticaPrecio(data) {
            $.each(data,function(index, value){
                if(index!='politicas_peso' && index!='politicas_cantidad'){
                    var dias = $.inArray( index, ["lunes", "martes", "miercoles", "jueves", "viernes", "sabado", "domingo"]);
                    if(dias>=0){//Checkboxs
                        var boolean = (parseInt(value)===0) ? false : true;
                        $('input[name="'+index+'"]').prop('checked', boolean);
                    }else{
                        if(index==='id_producto' || index==='id_frecuencia'){//Select2
                            $('#'+index).val(value).trigger("change");
                        }else{//inputs
                            $('#'+index).val(value);
                        }
                    }
                }else{//Inputs
                    $.each(value, function (index_a, object) {
                        $('input[name="'+index+'[' + index_a + '][cantidad]"]').val(object.cantidad);
                        $('input[name="'+index+'[' + index_a + '][cuota]"]').val(object.cuota);
                    });
                }
            });
        };

        function getProductosByCliente(idCliente) {
            var urlGetProductos = '../clientes/productos/'+idCliente;
            $.getJSON(urlGetProductos,function(data){
                selectProductos.not('.select2-container').empty();
                selectOptions.data = data;
                selectProductos.select2(selectOptions);
            });
        }

        function initializeSelects2() {
            selectProductos = $('#id_producto').select2(selectOptions);
            selectFrecuencias = $('#id_frecuencia').select2(selectOptions);
            selectClientes = $('#id_cliente').select2(selectOptions);
        }

        function initializeDataTableProductos() {
            datatablePoliticas = $('#dt-productos').DataTable({
                "bProcessing": true,
                "ajax": "",
                "aoColumns": [
                    {
                        "mData": "producto",
                        "mRender": function (data, type, full) {
                            return data.producto;
                        }
                    },
                    {
                        "mData": "cantidad",
                    },
                    {
                        "mData": "cuota",
                    },
                    {
                        "mData": "cantidad_menor",
                    },
                    {
                        "mData": "cantidad_menor_precio",
                    },
                    {
                        "mData": "tonelada_menor"
                    },
                    {
                        "mData": "tonelada_menor_precio"
                    },
                    {
                        "mData": "abono"
                    },
                    {
                        "mData": "acciones",
                        "mRender": function (data, type, full) {
                            return '<input data-id="' + full.id + '" type="button" class="btn btn-default btn-politica-ver" value="Ver">';
                        }
                    }
                ],
                "language": {"url": "{{URL::asset('datatables/json/dataTables.lang.es.json')}}"},
                "lengthMenu": [
                    [4, 8, 12, -1],
                    [4, 8, 12, "Todo"]
                ],
                "iDisplayLength": 4,
                "sDom": "<'dt-toolbar'" +
                "<'col-sm-6'l>" +
                "<'col-sm-6'f>" +
                "r" +
                ">" +
                "t" +
                "<'dt-toolbar-footer'<'col-xs-6'i><'col-xs-6'p>>"
            });

            $("#dt-productos thead th input[type=text]").on('keyup change', function () {
                datatablePoliticas
                        .column($(this).parent().index() + ':visible')
                        .search(this.value)
                        .draw();

            });
        }
        function initializeInputNumber() {
            $(".spinner-decimal").spinner({
                step: 0.01,
                numberFormat: "n",
                min: 0
            });
            $(".spinner").spinner({min: 0});
        }

        function getInfoCliente(loadDataTable) {
            var form = $('#frm-politica-precio').children().not('select');
            console.log(form);
            var loadDataTable = loadDataTable || false;
            var dataTablePoliticas = getPoliticasByCliente(selectClientes.val());
            if(loadDataTable) dataTablePoliticas.load();
            getProductosByCliente(selectClientes.val());
        }
        $(document).ready(function () {
            initializeDataTableProductos();
            initializeInputNumber();
            initializeSelects2();
            getInfoCliente();

            selectClientes.change(function(){
                getInfoCliente(true);
            });

            $('#dt-productos').on('click', '.btn-politica-ver', function (event) {
                event.preventDefault();
                var self = $(this);
                var url = self.attr('data-id');
                $.getJSON(url, function (data) {
                    completarFormPoliticaPrecio(data);
                    var id = data.id;
                    $("#frm-politica-precio").attr('action', id);
                    $("input[name='_method']").val('put');
                });
            });

        });
    </script>
@stop