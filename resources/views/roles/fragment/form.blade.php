<div class="form-group">
{!!Form::label('xxx_rl_prs_id','ID')!!}
{!!Form::number('xxx_rl_prs_id', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
{!!Form::label('xx_rl_prs_name','Nombre del rol')!!}
{!!Form::text('xx_rl_prs_name', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
{!!Form::label('xx_rl_prs_description','Descripcion del rol')!!}
{!!Form::text('xx_rl_prs_description', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
{!! Form::label('xxx_stas_id_rl_prs', 'Seleccione un status') !!}
{!! Form::select('xxx_stas_id_rl_prs', $selectstatus, null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!!Form::submit('ENVIAR', ['class' => 'btn btn-primary'])!!}
</div>