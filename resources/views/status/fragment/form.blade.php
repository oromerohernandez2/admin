<div class="form-group">
{!!Form::label('xx_stas_name','Nombre del estatus')!!}
{!!Form::text('xx_stas_name', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
{!!Form::label('xx_stas_description','Descripcion del estatus')!!}
{!!Form::text('xx_stas_description', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
    {!!Form::submit('ENVIAR', ['class' => 'btn btn-primary'])!!}
</div>