@extends('index3')
@section('url_historial')
<li>{{ link_to_route('home','Inicio') }}</li>
<li>{{ link_to_route('clientes.index','Clientes') }}</li>
<li>{{ $cliente->Razon }}</li>
@stop
@section('contenido')
<div class="row">
    <div class="col-xs-12">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#cliente_info" data-toggle="tab">Datos Generales</a></li>
            <li><a href="#cliente_comerciales" data-toggle="tab">Datos Comerciales</a></li>
            <li><a href="#cliente_obs" data-toggle="tab">Observaciones</a></li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
        <div class="tab-content">
            <div class="tab-pane active" id="cliente_info">
                @include('clientes.datos_generales')
            </div>

            <div class="tab-pane" id="cliente_comerciales">
                @include('clientes.datos_comerciales')
            </div>

            <div class="tab-pane" id="cliente_obs">
                @include('clientes.datos_observaciones')
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
        <hr>
    </div>
</div>
<div class="row show-grid">
    <div class="col-xs-12">
        <table class="table table-responsive">
            <tr>
                <td>Fecha Alta</td>
                <td>{{ $cliente->FechaAlta }}</td>
                <td>Fecha Ult. Mod.</td>
                <td>{{ $cliente->FechaMod }}</td>
                <td>Fecha Inhabilitacion</td>
                <td>{{ $cliente->FechaInhab }}</td>
            </tr>
            <tr>
                <td>Usuario:</td>
                <td>{{ $cliente->usuarioAlta->Nombre }}</td>
                <td>Usuario:</td>
                <td>{{ $cliente->usuarioModificacion->Nombre or '' }}</td>
                <td colspan="2">&nbsp;</td>
            </tr>
        </table>
    </div>
</div>

@stop
@section('js')
<script type="application/javascript">
    document.onkeyup = function (event) {
        event = event || window.event;

        var e = event.keyCode;

        if (e == 120) {
            window.location.href = "{{ URL::route('ctasCtesCli.cliente',$cliente->Id) }}";
        } else {
            console.log(e);
        }
    }

    $(function () {

        $(".btn-ver-ctacte").click(function (e) {
            e.preventDefault();
            var sHref = $(this).attr("data-href");
            window.location.href = sHref;
        });

    });
</script>
@stop