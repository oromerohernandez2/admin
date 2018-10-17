@extends('layout')

    @section('content')
    <div class="row">
        <div class="col-sm-8">

            <h2>
                Nuevo status
                <a href="{{route('roles.index')}}" class="btn btn-default pull-right">Listado de roles</a>
            </h2>
            @include('roles.fragment.error')

            {!!Form::open(['route' => 'roles.store'])!!}
                @include('roles.fragment.form')
            {!!Form::close()!!}
        </div>

        <div class="col-sm-4">
            @include('roles.fragment.aside')
        </div>
    </div>
    @endsection