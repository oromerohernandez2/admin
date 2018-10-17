@extends('layout')

    @section('content')
    <div class="row">
        <div class="col-sm-8">

            <h2>Listado de Municipios
            </h2>
            @include('municipalities.fragment.info')
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                    <th width="20px">ID</th>
                    <th>Nombre del municipio</th>
                    <th>Estado</th>
                    <th>Status</th>
                    <th colspan="1">Acciones</th>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach($municipalities as $municip)
                    <tr>
                    <td>{{$municip->xxx_mncp_id}}</td>
                    <td>{{$municip->xx_mncp_name}}</td>
                    <td>{{$municip->state->xx_stt_name}}</td>
                    <td>{{$municip->status->xx_stas_name}}</td>
                    <td><a href="{{route('municipalities.show',$municip->xxx_mncp_id)}}" class="btn btn-link">ver</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $municipalities->render()!!}
        </div>

        <div class="col-sm-4">
            @include('municipalities.fragment.aside')
        </div>
    </div>
    @endsection