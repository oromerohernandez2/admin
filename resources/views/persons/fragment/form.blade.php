<div class="form-group">
{!!Form::label('xxx_prsn_id','ID')!!}
{!!Form::number('xxx_prsn_id', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
{!!Form::label('xx_prsn_name','Nombre del empleado')!!}
{!!Form::text('xx_prsn_name', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
{!!Form::label('xx_prsn_lastname_p','Apellido paterno')!!}
{!!Form::text('xx_prsn_lastname_p', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
{!!Form::label('xx_prsn_lastname_m','Apellido materno')!!}
{!!Form::text('xx_prsn_lastname_m', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
{!!Form::label('xx_prsn_folio','Folio')!!}
{!!Form::text('xx_prsn_folio', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
{!!Form::label('xx_prsn_birthdate','Fecha de nacimiento')!!}
{!!Form::date('xx_prsn_birthdate', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
{!!Form::label('xx_prsn_age','Edad')!!}
{!!Form::number('xx_prsn_age', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
{!!Form::label('xx_prsn_gender','Genero')!!}
{!!Form::text('xx_prsn_gender', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
{!!Form::label('xx_prsn_street_name','Nombre de la calle')!!}
{!!Form::text('xx_prsn_street_name', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
{!!Form::label('xx_prsn_street_num_int','Numero interior')!!}
{!!Form::number('xx_prsn_street_num_int', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
{!!Form::label('xx_prsn_street_num_ext','Numero exterior')!!}
{!!Form::number('xx_prsn_street_num_ext', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
{!!Form::label('xx_prsn_observations','Observaciones')!!}
{!!Form::text('xx_prsn_observations', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
{!!Form::label('xx_prsn_profilephoto','Foto de perfil')!!}
{!!Form::file('xx_prsn_profilephoto', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
{!!Form::label('xx_prsn_salary','Salario')!!}
{!!Form::number('xx_prsn_salary', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
{!!Form::label('xx_prsn_curp','CURP')!!}
{!!Form::text('xx_prsn_curp', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
{!!Form::label('xx_prsn_rfc','RFC')!!}
{!!Form::text('xx_prsn_rfc', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
{!! Form::label('xxx_rl_prs_id_prsn', 'Seleccione un rol') !!}
{!! Form::select('xxx_rl_prs_id_prsn', $selectrole, null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('xxx_stas_id_prsn', 'Seleccione un status') !!}
{!! Form::select('xxx_stas_id_prsn', $selectstatus, null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('xxx_stt_id_prsn', 'Seleccione un estado') !!}
{!! Form::select('xxx_stt_id_prsn', $selectstate, null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('xxx_mncp_id_prsn', 'Seleccione un municipio') !!}
{!! Form::select('xxx_mncp_id_prsn', $selectmunicipalities, null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('xxx_lclty_id_prsn', 'Seleccione la localidad') !!}
{!! Form::select('xxx_lclty_id_prsn', $selectlocalities, null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!!Form::submit('ENVIAR', ['class' => 'btn btn-primary'])!!}
</div>