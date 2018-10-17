@extends('layout')

    @section('content')
    <div class="row">
        <div class="col-sm-8">

            <h2> Nombre:
            {{$state->xx_stt_name}}
            </h2>

            <p> Codigo:
            {{$state->xx_stt_code}}
            </p>

            <p> Status:
            {{$state->status->xx_stas_name}}
            </p>
            {!! $state->body !!}
        </div>

        <div class="col-sm-4">
            @include('states.fragment.aside')
        </div>
    </div>
    @endsection