@extends('layout')

    @section('content')
    <div class="row">
        <div class="col-sm-8">

            <h2>Listado de estados
            </h2>
            @include('states.fragment.info')
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                    <th width="20px">ID</th>
                    <th>Nombre del estado</th>
                    <th>Codigo</th>
                    <th>Status</th>
                    <th colspan="1">Acciones</th>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach($states as $state)
                    <tr>
                    <td>{{$state->xxx_stt_id}}</td>
                    <td>{{$state->xx_stt_name}}</td>
                    <td>{{$state->xx_stt_code}}</td>
                    <td>{{$state->status->xx_stas_name}}</td>
                    <td><a href="{{route('states.show',$state->xxx_stt_id)}}" class="btn btn-link">ver</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $states->render()!!}
        </div>

        <div class="col-sm-4">
            @include('states.fragment.aside')
        </div>
    </div>
    @endsection