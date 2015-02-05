<div class="row show-grid">
    <div class="col-xs-4">Direccion</div>
    <div class="col-xs-8">{{ $cliente->Fact_Direccion }}</div>
</div>
<div class="row show-grid">
    <div class="col-xs-2">Codigo Postal</div>
    <div class="col-xs-2">{{ $cliente->Fact_CodPos }}</div>

    <div class="col-xs-2">Localidad</div>
    <div class="col-xs-2">{{ $cliente->facturaLocalidad->Localidad }}</div>

    <div class="col-xs-2">Provincia</div>
    <div class="col-xs-2">{{ $cliente->facturaProvincia->Provincia }}</div>
</div>
<div class="row show-grid">
    <div class="col-xs-2">Tel. Primario</div>
    <div class="col-xs-4">{{ $cliente->Fact_Telefono1 }}</div>

    <div class="col-xs-2">Tel. Secundario</div>
    <div class="col-xs-4">{{ $cliente->Fact_Telefono2 }}</div>
</div>
<div class="row show-grid">
    <div class="col-xs-2">Email</div>
    <div class="col-xs-4">{{ $cliente->Fact_Email }}</div>

    <div class="col-xs-2">Horario Atencion</div>
    <div class="col-xs-4">{{ $cliente->Fact_Horario }}</div>
</div>
<div class="row show-grid">
    <div class="col-xs-2">Estado</div>
    <div class="col-xs-4">{{ $cliente->Estado }}</div>
</div>