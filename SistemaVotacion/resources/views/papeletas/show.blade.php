@extends('papeletas.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> VER PAPELETA</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('papeletas.index') }}"> Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>NÚMERO DE PAPELETA::</strong>
            {{ $papeletas->PAPELETANUMERO }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>CÉDULA:</strong>
            {{ $papeletas->VOTANTECEDULA }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>PAPELETA TIPO:</strong>
            {{ $papeletas->PAPELETATIPO }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>FECHA DE VOTACIÓN:</strong>
            {{ $papeletas->PAPELETAFECHAVOTACION }}
        </div>
    </div>
</div>
@endsection