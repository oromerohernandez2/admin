@extends('layout')

    @section('content')
    <div class="row">
        <div class="col-sm-8">        
        <h2> Nombre:
            {{$statu->xx_stas_name}}
            <a href="{{route('status.edit',$statu->xxx_stas_id)}}" class="btn btn-default pull-right">Editar status</a>
            </h2>

            <p> Codigo:
            {{$statu->xx_stas_description}}
            </p>
            {!! $statu->body !!}
        </div>
        <div class="col-sm-4">
            @include('status.fragment.aside')
        </div>
    </div>
    @endsection