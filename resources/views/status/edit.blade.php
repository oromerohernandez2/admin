@extends('layout')

    @section('content')
    <div class="row">
        <div class="col-sm-8">

            <h2>
                Editar status
                <a href="{{route('status.index')}}" class="btn btn-default pull-right">Listado</a>
            </h2>
            @include('status.fragment.error')

            {!!Form::model($statu, ['route' => ['status.update', $statu->xxx_stas_id], 'method' => 'PUT'])!!}
                @include('status.fragment.form')
            {!!Form::close()!!}
        </div>

        <div class="col-sm-4">
            @include('status.fragment.aside')
        </div>
    </div>
    @endsection