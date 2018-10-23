@extends('layout')

    @section('content')
    <div class="row">
        <div class="col-sm-8">

            <h2> Nombre:
            {{$localitie->xx_lclty_name}}
            </h2>

            <p> Codigo postal:
            {{$localitie->xx_lclty_postalcode}}
            </p>

            <p>Zona:
            {{$localitie->xx_lclty_zone}}
            </p>

            <p>Municipio:
            {{$localitie->municip->xx_mncp_name}}
            </p>

            <p>Status:
            {{$localitie->status->xx_stas_name}}
            </p>
            {!! $localitie->body !!}
        </div>

        <div class="col-sm-4">
            @include('localities.fragment.aside')
        </div>
    </div>
    @endsection