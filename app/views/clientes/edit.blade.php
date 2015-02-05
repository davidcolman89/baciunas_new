@extends('index3')
@section('pagina_titulo')
Clientes
@stop
@section('url_historial')
<li>{{ link_to_route('home','Inicio') }}</li>
<li>Clientes</li>
@stop
@section('contenido')
{{ Form::model( $cliente ,['route'=>['clientes.update',$cliente->id],'method'=>'PATCH'],['role'=>'form']) }}
    @include('clientes/partials/_form',[ 'buttonText' => 'Actualizar Cliente'])
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