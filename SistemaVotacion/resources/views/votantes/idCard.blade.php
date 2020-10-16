@extends('votantes.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Certificado de votacion del votante: {{$votantes->VOTANTENOMBRES}} {{$votantes->VOTANTEAPELLIDOS}}</h2>
        </div>
    </div>
</div>
<div class="card text-white bg-primary mb-3">
    <div class="row no-gutters">
        <div class="col-md-4">
            <img src="{{Auth::user()->get_image}}" class="card-img" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">{{Auth::user()->VOTANTENOMBRES}}</h5>
                <p class="card-text">{{Auth::user()->VOTANTECEDULA}}</p>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <a href="http://www.facebook.com/sharer.php?u=http://localhost:8080/votantes/1722521620" target="_blank">Share on facebook</a>
</div>


@endsection