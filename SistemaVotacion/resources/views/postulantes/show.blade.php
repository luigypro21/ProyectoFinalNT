@extends('postulantes.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> VER POSTULANTE</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('postulantes.index') }}"> Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>ID:</strong>
            {{ $postulantes->POSTULANTEID }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>NÚMERO DE PAPELETA:</strong>
            {{ $postulantes->PAPELETANUMERO }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>CÉDULA:</strong>
            {{ $postulantes->VOTANTECEDULA }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>CARGO:</strong>
            {{ $postulantes->POSTULANTECARGO }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>PARTIDO POLÍTICO:</strong>
            {{ $postulantes->POSTULANTEPARTIDO }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>PARTIDO POLÍTICO:</strong>
            {{ $postulantes->POSTULANTENUMEROLISTA }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>FOTO LISTA:</strong>
            @if($postulantes->POSTULANTEFOTOLISTA)
            <img src="{{$postulantes->get_image}}" class="card-img-top">
            @endif
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>VOTOS:</strong>
            {{ $postulantes->CANTIDADVOTOS }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>TIPO VOTO:</strong>
            {{ $postulantes->TIPOVOTO }}
        </div>
    </div>
</div>
@endsection