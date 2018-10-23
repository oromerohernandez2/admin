@extends('layout')

    @section('content')
    <div class="row">
        <div class="col-sm-8">

            <h2>Listado de roles
                <a href="{{route('roles.create')}}" class="btn btn-primary pull-right">Nuevo Rol</a>
            </h2>
            @include('roles.fragment.info')
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                    <th width="20px">ID</th>
                    <th>Nombre del rol</th>
                    <th>Descripcion</th>
                    <th>Status</th>
                    <th colspan="3">Acciones</th>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach($roles as $role)
                    <tr>
                    <td>{{$role->xxx_rl_prs_id}}</td>
                    <td>{{$role->xx_rl_prs_name}}</td>
                    <td>{{$role->xx_rl_prs_description}}</td>
                    <td>{{$role->status->xx_stas_name}}</td>
                    <td><a href="{{route('roles.show',$role->xxx_rl_prs_id)}}" class="btn btn-link">ver</a></td>
                    <td><a href="{{route('roles.edit',$role->xxx_rl_prs_id)}}" class="btn btn-link">editar</a></td>
                   
                    <td>
                    <form action="{{route('roles.destroy', $role->xxx_rl_prs_id)}}" method="POST">
                       {{csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-link">borrar</button>
                    </form>
                    </td>
                    
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $roles->render()!!}
        </div>

        <div class="col-sm-4">
            @include('roles.fragment.aside')
        </div>
    </div>
    @endsection