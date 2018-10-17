@extends('layout')

    @section('content')
    <div class="row">
        <div class="col-sm-8">

            <h2>Listado de estados
                <a href="{{route('states.create')}}" class="btn btn-primary pull-right">Nuevo Estado</a>
            </h2>
            @include('states.fragment.info')
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                    <th width="20px">ID</th>
                    <th>Nombre del estado</th>
                    <th>Codigo</th>
                    <th colspan="3">Acciones</th>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach($states as $state)
                    <tr>
                    <td>{{$state->xxx_stt_id}}</td>
                    <td>{{$state->xx_stt_name}}</td>
                    <td>{{$state->xx_stt_code}}</td>
                    <td><a href="{{route('states.show',$state->xxx_stt_id)}}" class="btn btn-link">ver</a></td>
                    <td><a href="{{route('states.edit',$state->xxx_stt_id)}}" class="btn btn-link">editar</a></td>
                   
                    <td>
                    <form action="{{route('states.destroy', $state->xxx_stt_id)}}" method="POST">
                       {{csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-link">borrar</button>
                    </form>
                    </td>
                    
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