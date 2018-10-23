@extends('layout')

    @section('content')
    <div class="row">
        <div class="col-sm-8">        
        <h2> Folio:
            {{$person->xx_prsn_folio}}
            <a href="{{route('persons.edit',$person->xxx_prsn_id)}}" class="btn btn-default pull-right">Editar empleado</a>
            </h2>
                    <p>Nombre:
                    {{$person->xx_prsn_name}}
                    </p>

                    <p>Apellido paterno:
                    {{$person->xx_prsn_lastname_p }}
                    </p>
                    
                    <p>Apellido materno:
                    {{$person->xx_prsn_lastname_m }}
                    </p>

                    <p>Fecha nacimiento:
                    {{$person->xx_prsn_birthdate}}
                    </p>

                    <p>Edad:
                    {{$person->xx_prsn_age}}
                    </p>

                    <p>Genero:
                    {{$person->xx_prsn_gender}}
                    </p>

                    <p>Calle:
                    {{$person->xx_prsn_street_name}}
                    </p>

                    <p>Num_int:
                    {{$person->xx_prsn_street_num_int}}
                    </p>

                    <p>Num_ext:
                    {{$person->xx_prsn_street_num_ext}}
                    </p>
                    <p>Foto Perfil:
                    <img class="card-img-top" src="images_acount/{{$person->xx_prsn_profilephoto}}" alt="">
                    </p>
                    
                    <p>CURP:
                    {{$person->xx_prsn_curp}}
                    </p>

                    <p>RFC:
                    {{$person->xx_prsn_rfc}}
                    </p>

                    <p>Salario:
                    {{$person->xx_prsn_salary}}
                    </p>

                    <p>Observaciones:
                    {{$person->xx_prsn_observations}}
                    </p>

                    <p>Role:
                    {{$person->role->xx_rl_prs_name}}
                    </p>

                    
                    <p>Status:
                    {{$person->status->xx_stas_name}}
                    </p>

                    <p>Estado:
                    {{$person->state->xx_stt_name}}
                    </p>

                    <p>Municipio:
                    {{$person->municip->xx_mncp_name}}
                    </p>

                    
                    <p>Localidad:
                    {{$person->localitie->xx_lclty_name}}
                    </p>

            {!! $person->body !!}
        </div>
        <div class="col-sm-4">
            @include('persons.fragment.aside')
        </div>
    </div>
    @endsection