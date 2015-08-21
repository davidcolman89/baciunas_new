<div class="form-group">
    <div class="col-md-6">
        <div class="form-group">
            {{ Form::label('id_cliente','Cliente:', ['class'=>'control-label col-md-3']) }}
            <div class="col-md-9">
                {{ Form::select('id_cliente', $clientes, ['class'=>'form-control']); }}
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('id_tipo_producto','Tipo de Producto:', ['class'=>'control-label col-md-3']) }}
            <div class="col-md-9">
                {{ Form::select('id_tipo_producto', $tiposProducto, ['class'=>'form-control']); }}
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('producto','Producto:', ['class'=>'control-label col-md-3']) }}
            <div class="col-md-9">
                {{ Form::text('producto', '', ['class'=>'form-control']); }}
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                {{ Form::submit('Guardar', ['class'=>'btn btn-primary']) }}
            </div>
        </div>
    </div>
</div>