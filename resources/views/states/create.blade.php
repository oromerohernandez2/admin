@extends('layout')

    @section('content')
    <div class="row">
        <div class="col-sm-8">

            <h2>
                Nuevo estado
                <a href="{{route('states.index')}}" class="btn btn-default pull-right">Listado de estados</a>
            </h2>
            @include('states.fragment.error')

            {!!Form::open(['route' => 'states.store'])!!}
                @include('states.fragment.form')
            {!!Form::close()!!}
        </div>

        <div class="col-sm-4">
            @include('states.fragment.aside')
        </div>
    </div>
    @endsection