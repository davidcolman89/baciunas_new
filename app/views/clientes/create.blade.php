@extends('index3')
@section('pagina_titulo')
Clientes
@stop
@section('url_historial')
<li>{{ link_to_route('home','Inicio') }}</li>
<li>Clientes</li>
@stop
@section('contenido')
{{ Form::open( ['route' => 'clientes.store','method' => 'POST'],['role' => 'form']) }}
    @include('clientes/partials/_form')
{{ Form::close() }}
@stop
@section('js')
<script type="text/javascript">
    $(document).ready(function () {
        $("#link-guardar-cliente").click(function(){
        });
    });
</script>
@stop