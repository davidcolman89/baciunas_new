<div class="row">
    <div class="col-xs-12"><br></div>
</div>
<div class="row">
    <div class="col-xs-5">
        <div class="row show-grid">
            <div class="col-xs-6">Vendedor</div>
            <div class="col-xs-6">{{ $cliente->vendedor->Vendedor }}</div>
        </div>
        <div class="row show-grid">
            <div class="col-xs-6">CUIT</div>
            <div class="col-xs-6">{{ $cliente->CUIT }}</div>
        </div>
        <div class="row show-grid">
            <div class="col-xs-6">Recorrido</div>
            <div class="col-xs-6">{{ $cliente->chofer->Chofer }}</div>
        </div>
        <div class="row show-grid">
            <div class="col-xs-6">Cuota Mensual</div>
            <div class="col-xs-6">{{ $cliente->CuotaMensual }}</div>
        </div>
        <div class="row show-grid">
            <div class="col-xs-6">Grupo Empresario</div>
            <div class="col-xs-6">{{ $cliente->rubroEmpresario->RubroEmp }}</div>
        </div>
    </div>
    <div class="col-xs-1">&nbsp;</div>
    <div class="col-xs-6">
        <fieldset>
            <legend>Datos Fiscales</legend>
            <div class="row show-grid">
                <div class="col-xs-6">Categoria I.V.A</div>
                <div class="col-xs-6">{{$cliente->categoriaIVA->CategoriaIVA}}  </div>
            </div>
            <div class="row show-grid">
                <div class="col-xs-6">Condicion Vta.</div>
                <div class="col-xs-6">{{$cliente->condicionVenta->Condicion}} </div>
            </div>
            <div class="row show-grid">
                <div class="col-xs-6">Ingresos Brutos</div>
                <div class="col-xs-6">{{ $cliente->IdPercepIIBB }}</div>
            </div>
            <div class="row show-grid">
                <div class="col-xs-6">Ingresos Brutos Bs. As.</div>
                <div class="col-xs-6">{{ $cliente->IdPercepIIBBBsAs }}</div>
            </div>
        </fieldset>
    </div>
</div>
<div class="row">
    <div class="col-xs-12"><hr></div>
</div>
<div class="row show-grid">
    <div class="col-xs-3">Tipo Cliente</div>
    <div class="col-xs-3">{{ $cliente->tipoCliente[0]->TipoCliente }}</div>
    <div class="col-xs-3">Pag. Web</div>
    <div class="col-xs-3">{{ $cliente->Web }}</div>
</div>
<div class="row show-grid">
    <div class="col-xs-3">Rubro Empresario</div>
    <div class="col-xs-3">{{ $cliente->rubroEmpresario->RubroEmp }}</div>
</div>
<div class="row show-grid">
    <div class="col-xs-3">Recomendado por</div>
    <div class="col-xs-9">{{ $cliente->Recomendado }}</div>
</div>