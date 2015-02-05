<div class="row">
    <div class="col-xs-12"><br></div>
</div>
<div class="row show-grid">
    <div class="col-xs-6 col-sm-6 col-md-3">Nro Cliente:</div>
    <div class="col-xs-6 col-sm-6 col-md-3">{{ $cliente->Id }}</div>
    <div class="col-xs-6 col-sm-6 col-md-3">Nombre Comercial:</div>
    <div class="col-xs-6 col-sm-6 col-md-3">{{ $cliente->Comercial }}</div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-4">
        <br>
        <button type="button" class="btn btn-primary btn-ver-ctacte" data-href="{{ URL::route('ctasCtesCli.cliente', $cliente->Id) }}">Cuenta Corriente</button>
    </div>
</div>
<div class="row">
    <div class="col-xs-12"><hr></div>
</div>
<div class="row">
    <div class="col-xs-12">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#info_facturacion" data-toggle="tab">Facturacion</a></li>
            <li><a href="#info_cobranza" data-toggle="tab">Cobranza</a></li>
            <li><a href="#info_servicios" data-toggle="tab">Servicios</a></li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-xs-12"><br><br></div>
</div>
<div class="row">
    <div class="col-xs-12">
        <div class="tab-content">
            <div class="tab-pane active" id="info_facturacion">
                @include('clientes.datos_generales.info_facturacion')
            </div>
            <div class="tab-pane" id="info_cobranza">
                @include('clientes.datos_generales.info_cobranza')
            </div>
            <div class="tab-pane" id="info_servicios">
                @include('clientes.datos_generales.info_servicio')
            </div>
        </div>
    </div>
</div>