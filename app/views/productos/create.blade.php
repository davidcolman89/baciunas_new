@extends('index3')
@section('pagina_titulo')
    Productos
@stop
@section('url_historial')
    <li>{{ link_to_route('home','Inicio') }}</li>
    <li>Productos</li>
@stop
@section('contenido')
    {{ Form::open( ['route' => 'productos.store','method' => 'POST'],['role' => 'form']) }}
    @include('productos/partials/_form')
    {{ Form::close() }}
@stop
@section('js')
    <script type="text/javascript">
        var selectTiposProducto;
        var selectFrecuencias;
        var selectClientes;
        var selectOptions = {
            theme: "bootstrap",
            width:"style",
            data:'',
            placeholder:''
        };

        function initializeSelects2() {
            selectClientes = $('#id_cliente').select2(selectOptions);
            selectTiposProducto = $('#id_tipo_producto').select2(selectOptions);
        }
        $(document).ready(function () {
            initializeSelects2()
        });
    </script>
@stop