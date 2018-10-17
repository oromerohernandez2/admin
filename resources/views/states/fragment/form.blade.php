<div class="form-group">
{!!Form::label('name','Nombre del estado')!!}
{!!Form::text('name', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
{!!Form::label('code','Codigo del estado')!!}
{!!Form::text('code', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
{!!Form::label('status','Estado actual')!!}
{!!Form::text('status', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
    {!!Form::submit('ENVIAR', ['class' => 'btn btn-primary'])!!}
</div>