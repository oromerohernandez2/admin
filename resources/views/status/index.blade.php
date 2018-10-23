@extends('layout')

    @section('content')
    <div class="row">
        <div class="col-sm-8">

            <h2>Listado de estatus
                <a href="{{route('status.create')}}" class="btn btn-primary pull-right">Nuevo Estatus</a>
            </h2>
            @include('status.fragment.info')
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                    <th width="20px">ID</th>
                    <th>Nombre del Estatus</th>
                    <th>Descripcion</th>
                    <th colspan="3">Acciones</th>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach($status as $statu)
                    <tr>
                    <td>{{$statu->xxx_stas_id}}</td>
                    <td>{{$statu->xx_stas_name}}</td>
                    <td>{{$statu->xx_stas_description}}</td>
                    <td><a href="{{route('status.show',$statu->xxx_stas_id)}}" class="btn btn-link">ver</a></td>
                    <td><a href="{{route('status.edit',$statu->xxx_stas_id)}}" class="btn btn-link">editar</a></td>
                   
                    <td>
                    <form action="{{route('status.destroy', $statu->xxx_stas_id)}}" method="POST">
                       {{csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-link">borrar</button>
                    </form>
                    </td>
                    
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $status->render()!!}
        </div>

        <div class="col-sm-4">
            @include('status.fragment.aside')
        </div>
    </div>
    @endsection