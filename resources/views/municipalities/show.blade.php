@extends('layout')

    @section('content')
    <div class="row">
        <div class="col-sm-8">

            <h2> Nombre:
            {{$municip->xx_mncp_name}}
            </h2>

            <p> Estado:
            {{$municip->state->xx_stt_name}}
            </p>
            {!! $municip->body !!}

            <p>Status:
            {{$municip->status->xx_stas_name}}
            </p>
        </div>

        <div class="col-sm-4">
            @include('municipalities.fragment.aside')
        </div>
    </div>
    @endsection