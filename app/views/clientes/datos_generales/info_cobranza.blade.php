<div class="row show-grid">
    <div class="col-xs-4">Direccion</div>
    <div class="col-xs-8">{{ $cliente->Cob_Direccion }}</div>
</div>
<div class="row show-grid">
    <div class="col-xs-2">Codigo Postal</div>
    <div class="col-xs-2">{{ $cliente->Cob_CodPos }}</div>

    <div class="col-xs-2">Localidad</div>
    <div class="col-xs-2">{{ $cliente->cobranzaLocalidad->Localidad }}</div>

    <div class="col-xs-2">Provincia</div>
    <div class="col-xs-2">{{ $cliente->cobranzaProvincia->Provincia }}</div>
</div>
<div class="row show-grid">
    <div class="col-xs-2">Tel. Primario</div>
    <div class="col-xs-4">{{ $cliente->Cob_Telefono1 }}</div>

    <div class="col-xs-2">Tel. Secundario</div>
    <div class="col-xs-4">{{ $cliente->Cob_Telefono2 }}</div>
</div>
<div class="row show-grid">
    <div class="col-xs-2">Email</div>
    <div class="col-xs-4">{{ $cliente->Cob_Email }}</div>

    <div class="col-xs-2">Horario Atencion</div>
    <div class="col-xs-4">{{ $cliente->Cob_Horario }}</div>
</div>
<div class="row show-grid">
    <div class="col-xs-2">Pers. Contacto</div>
    <div class="col-xs-4">{{ $cliente->Cob_PersonaContacto }}</div>
</div>
<div class="row show-grid">
    <div class="col-xs-2">Estado</div>
    <div class="col-xs-4">{{ $cliente->Estado }}</div>
</div>
<div class="row show-grid">
    <div class="col-xs-2">Cobrador</div>
    <div class="col-xs-4">{{ $cliente->vendedor->Vendedor }}</div>
</div>
<div class="row show-grid">
    <div class="col-xs-2">Hoja Filcar</div>
    <div class="col-xs-4">{{ $cliente->HojaFilcar }}</div>
</div>