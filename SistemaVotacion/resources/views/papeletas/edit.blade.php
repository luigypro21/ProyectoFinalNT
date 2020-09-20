@extends('papeletas.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit papeleta</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('papeletas.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
 
<form action="{{ route('papeletas.update',$papeletas->PAPELETANUMERO )}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NÚMERO DE PAPELETA:</strong>
                <input type="text" name="PAPELETANUMERO" value="{{ $papeletas->PAPELETANUMERO }}" class="form-control" placeholder="NÚMERO DE PAPELETA">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CÉDULA:</strong>
                <input type="text" name="VOTANTECEDULA" value="{{ $papeletas->VOTANTECEDULA }}" class="form-control" placeholder="CÉDULA DEL VOTANTE">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>PAPELETA TIPO:</strong>
                <input type="text" name="PAPELETATIPO" value="{{ $papeletas->PAPELETATIPO }}" class="form-control" placeholder="PAPELETA TIPO">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>FECHA DE VOTACIÓN:</strong>
                <input type="text" name="PAPELETAFECHAVOTACION" value="{{ $papeletas->PAPELETAFECHAVOTACION }}" class="form-control" placeholder="FECHA DE VOTACIÓN">
            </div> 
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">ENVIAR</button>
        </div>
    </div>

</form>
@endsection