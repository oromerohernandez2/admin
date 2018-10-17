@extends('layout')

    @section('content')
    <div class="row">
        <div class="col-sm-8">

            <h2>
                Nuevo status
                <a href="{{route('status.index')}}" class="btn btn-default pull-right">Listado de estados</a>
            </h2>
            @include('status.fragment.error')

            {!!Form::open(['route' => 'status.store'])!!}
                @include('status.fragment.form')
            {!!Form::close()!!}
        </div>

        <div class="col-sm-4">
            @include('status.fragment.aside')
        </div>
    </div>
    @endsection