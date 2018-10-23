@extends('layout')

    @section('content')
    <div class="row">
        <div class="col-sm-8">

            <h2>
                Editar rol
                <a href="{{route('roles.index')}}" class="btn btn-default pull-right">Listado de roles</a>
            </h2>
            @include('status.fragment.error')

            {!!Form::model($role, ['route' => ['roles.update', $role->xxx_rl_prs_id], 'method' => 'PUT'])!!}
                @include('roles.fragment.form')
            {!!Form::close()!!}
        </div>

        <div class="col-sm-4">
            @include('roles.fragment.aside')
        </div>
    </div>
    @endsection