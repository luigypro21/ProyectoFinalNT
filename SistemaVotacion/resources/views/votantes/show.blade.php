@extends('votantes.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> VER VOTANTE</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('votantes.index') }}"> Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>CÉDULA:</strong>
            {{ $votantes->VOTANTECEDULA }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>NOMBRES:</strong>
            {{ $votantes->VOTANTENOMBRES }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>APELLIDOS:</strong>
            {{ $votantes->VOTANTEAPELLIDOS }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>FECHA:</strong>
            {{ $votantes->VOTANTEFECHANACIMIENTO }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>PROVINCIA:</strong>
            {{ $votantes->VOTANTEPROVINCIA }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>CANTÓN:</strong>
            {{ $votantes->VOTANTECANTON }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>CIRCUNSCRIPCIÓN:</strong>
            {{ $votantes->VOTANTECIRCUNSCRIPCION }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>PARROQUIA:</strong>
            {{ $votantes->VOTANTEPARROQUIA }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>TIPO:</strong>
            {{ $votantes->VOTANTETIPO }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>CÓDIGO DE BARRAS:</strong>
            {{ $votantes->VOTANTECODIGOBARRAS }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>FOTO DEL VOTANTE:</strong>
            @if($votantes->VOTANTEFOTO)
            <img src="{{$votantes->get_image}}" class="card-img-top">
            @endif
        </div>
    </div>

</div>
@endsection