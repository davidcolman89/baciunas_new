<div class="row show-grid">
    <div class="col-xs-4">Direccion</div>
    <div class="col-xs-8">{{ $cliente->Prod_Direccion  or ''}}</div>
</div>
<div class="row show-grid">
    <div class="col-xs-2">Codigo Postal</div>
    <div class="col-xs-2">{{ $cliente->Prod_CodPos or ''}}</div>

    <div class="col-xs-2">Localidad</div>
    <div class="col-xs-2">{{ $cliente->serviciosLocalidad->Localidad or ''}}</div>

    <div class="col-xs-2">Provincia</div>
    <div class="col-xs-2">{{ $cliente->serviciosProvincia->Provincia  or ''}}</div>
</div>
<div class="row show-grid">
    <div class="col-xs-2">Tel. Primario</div>
    <div class="col-xs-4">{{ $cliente->Prod_Telefono1 or '' }}</div>

    <div class="col-xs-2">Tel. Secundario</div>
    <div class="col-xs-4">{{ $cliente->Prod_Telefono2 or '' }}</div>
</div>
<div class="row show-grid">
    <div class="col-xs-2">Nro CEAMSE</div>
    <div class="col-xs-4">{{ $cliente->NroCEAMSE or ''}}</div>

    <div class="col-xs-2">Horario Atencion</div>
    <div class="col-xs-4">{{ $cliente->Prod_Horario or '' }}</div>
</div>
<div class="row show-grid">
    <div class="col-xs-2">Entre Calle</div>
    <div class="col-xs-4">{{ $cliente->Prod_EntreCalle1 or '' }}</div>

    <div class="col-xs-2">y Calle</div>
    <div class="col-xs-4">{{ $cliente->Prod_EntreCalle2 or '' }}</div>
</div>
<div class="row show-grid">
    <div class="col-xs-2">Estado</div>
    <div class="col-xs-4"></div>
</div>