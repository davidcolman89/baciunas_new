<div class="row">
    <div class="col-xs-12">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#cliente_info" data-toggle="tab">Datos Generales</a></li>
            <li><a href="#cliente_comerciales" data-toggle="tab">Datos Comerciales</a></li>
            <li><a href="#cliente_obs" data-toggle="tab">Observaciones</a></li>
            <li>
                {{ Form::button(isset($buttonText)?$buttonText:'Crear Cliente', ['type'=>'submit','class'=>'btn btn-primary']) }}
            </li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
        <div class="tab-content">
            <div class="tab-pane active" id="cliente_info">
                <div class="form-group">
                    <div class="col-md-4">
                        {{ Form::label('razon_social','Razon Social') }}
                        {{ Form::text('razon_social',null,['class'=>'form-control']) }}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4">
                        {{ Form::label('razon_comercial','Razon Comercial') }}
                        {{ Form::text('razon_comercial',null,['class'=>'form-control']) }}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4">
                        {{ Form::label('cuit','CUIT') }}
                        {{ Form::text('cuit',null,['class'=>'form-control']) }}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4">
                        {{ Form::label('url_web','Web') }}
                        {{ Form::text('url_web',null,['class'=>'form-control']) }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        {{ Form::label('numero_ceamse','Numero CEAMSE') }}
                        {{ Form::text('numero_ceamse',null,['class'=>'form-control']) }}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4">
                        {{ Form::label('categoria_iva','Categoria IVA') }}
                        <select id="categoria_iva" class="form-control">

                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4">
                        {{ Form::label('estado','Estado') }}
                        <select id="estado" class="form-control">
                            <option>Habilitado</option>
                            <option>Deshabilitado</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="cliente_comerciales"></div>
            <div class="tab-pane" id="cliente_obs">
                <div class="form-group">
                    <div class="col-md-4">
                        {{ Form::label('observaciones','Observaciones') }}
                        {{ Form::textarea('observaciones',null,['class'=>'form-control']) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#direccion_cobranza" data-toggle="tab">Direccion Cobranza</a></li>
            <li><a href="#direccion_facturacion" data-toggle="tab">Direccion Facturacion</a></li>
            <li><a href="#direccion_servicio" data-toggle="tab">Direccion Servicio</a></li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
        <div class="tab-pane active" id="direccion_cobranza">
            asdasd
        </div>
        <div class="tab-pane" id="direccion_facturacion">
            ggggg
        </div>
        <div class="tab-pane" id="direccion_servicio">
            <div class="row">
                ggggggggggg
            </div>
        </div>
    </div>
</div>