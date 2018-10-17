@extends('layout')

    @section('content')
    <div class="row">
        <div class="col-sm-8">

            <h2>Listado de empelados
                <a href="{{route('persons.create')}}" class="btn btn-primary pull-right">Nuevo empleado</a>
            </h2>
            @include('persons.fragment.info')
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                    <th width="20px">ID</th>
                        <th>Nombre</th>
                        <th>Apellido paterno </th>
                        <th>Apellido Materno </th>
                        <th>Folio</th>
                        <th>FechaNacimiento</th>
                        <th>Edad </th>
                        <th>Genero</th>
                        <th>Calle</th>
                        <th>Num_ext</th>
                        <th>Observaciones</th>
                        <th>Foto de perfil </th>
                        <th>CURP</th>
                        <th>RFC</th>
                        <th>Status</th>
                    <th colspan="3">Acciones</th>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach($persons as $person)
                    <tr>
                    <td>{{$person->xxx_prsn_id}}</td>
                    <td>{{$person->xx_prsn_name}}</td>
                    <td>{{$person->xx_prsn_lastname_p }}</td>
                    <td>{{$person->xx_prsn_lastname_m }}</td>
                    <td>{{$person->xx_prsn_folio}}</td>
                    <td>{{$person->xx_prsn_birthdate}}
                    <td>{{$person->xx_prsn_age }}</td>
                    <td>{{$person->xx_prsn_gender }}</td>
                    <td>{{$person->xx_prsn_street_name}}</td>
                    <td>{{$person->xx_prsn_street_num_ext}}</td>
                    <td>{{$person->xx_prsn_observations}}</td>
                    <td><img class="card-img-top" src="images_acount/{{$person->xx_prsn_profilephoto}}" alt=""></td>
                    <td>{{$person->xx_prsn_curp}}</td>
                    <td>{{$person->xx_prsn_rfc}}</td>
                    <td>{{$person->status->xx_stas_name}}</td>
                    <td><a href="{{route('persons.show',$person->xxx_prsn_id)}}" class="btn btn-link">ver</a></td>
                    <td><a href="{{route('persons.edit',$person->xxx_prsn_id)}}" class="btn btn-link">editar</a></td>
                   
                    <td>
                    <form action="{{route('persons.destroy', $person->xxx_prsn_id)}}" method="POST">
                       {{csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-link">borrar</button>
                    </form>
                    </td>
                    
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $persons->render()!!}
        </div>

        <div class="col-sm-4">
            @include('persons.fragment.aside')
        </div>
    </div>
    @endsection