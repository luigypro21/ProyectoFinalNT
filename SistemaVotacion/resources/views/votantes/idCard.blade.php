@extends('votantes.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Certificado de votacion del votante: {{$votantes->VOTANTENOMBRES}} {{$votantes->VOTANTEAPELLIDOS}}</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('votantes.index') }}"> Back</a>
        </div>
    </div>
</div>


@endsection