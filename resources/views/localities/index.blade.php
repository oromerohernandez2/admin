@extends('layout')

    @section('content')
    <div class="row">
        <div class="col-sm-8">

            <h2>Listado de localidades
            </h2>
            @include('localities.fragment.info')
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                    <th width="20px">ID</th>
                    <th>Nombre de la localidad</th>
                    <th>Codigo Postal</th>
                    <th>Zona</th>
                    <th>Municipio</th>
                    <th>Status</th>
                    <th colspan="1">Acciones</th>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach($localities as $localitie)
                    <tr>
                    <td>{{$localitie->xxx_lclty_id}}</td>
                    <td>{{$localitie->xx_lclty_name}}</td>
                    <td>{{$localitie->xx_lclty_postalcode}}</td>
                    <td>{{$localitie->xx_lclty_zone}}</td>
                    <td>{{$localitie->municip->xx_mncp_name}}</td>
                    <td>{{$localitie->status->xx_stas_name}}</td>
                    <td><a href="{{route('localities.show',$localitie->xxx_lclty_id)}}" class="btn btn-link">ver</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $localities->render()!!}
        </div>

        <div class="col-sm-4">
            @include('localities.fragment.aside')
        </div>
    </div>
    @endsection