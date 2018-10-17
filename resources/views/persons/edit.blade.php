@extends('layout')

    @section('content')
    <div class="row">
        <div class="col-sm-8">

            <h2>
                Editar empleado
                <a href="{{route('persons.index')}}" class="btn btn-default pull-right">Listado de empleados</a>
            </h2>
            @include('persons.fragment.error')

            {!!Form::model($person, ['route' => ['persons.update', $person->xxx_prsn_id], 'method' => 'PUT'])!!}
                @include('persons.fragment.form')
            {!!Form::close()!!}
        </div>

        <div class="col-sm-4">
            @include('persons.fragment.aside')
        </div>
    </div>
    @endsection