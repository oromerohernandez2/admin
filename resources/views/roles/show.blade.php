@extends('layout')

    @section('content')
    <div class="row">
        <div class="col-sm-8">        
        <h2> Nombre:
            {{$role->xx_rl_prs_name}}
            <a href="{{route('roles.edit',$role->xxx_rl_prs_id)}}" class="btn btn-default pull-right">Editar roles</a>
            </h2>

            <p> Codigo:
            {{$role->xx_rl_prs_description}}
            </p>
            
            <p>Status:
            {{$role->status->xx_stas_name}}
            </p>
            {!! $role->body !!}
        </div>
        <div class="col-sm-4">
            @include('roles.fragment.aside')
        </div>
    </div>
    @endsection