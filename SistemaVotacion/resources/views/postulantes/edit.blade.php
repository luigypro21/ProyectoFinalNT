@extends('postulantes.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit postulante</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('postulantes.index') }}"> Back</a>
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

<form action="{{ route('postulantes.update',$postulantes->POSTULANTEID )}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID:</strong>
                <input type="text" name="POSTULANTEID" value="{{ $postulantes->POSTULANTEID }}" class="form-control" placeholder="ID">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NUMERO DE PAPEPELTA:</strong>
                <input type="text" name="PAPELETANUMERO"  value="{{ $postulantes->PAPELETANUMERO }}" class="form-control" placeholder="NUMERO DE PAPEPELTA">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CÉDULA:</strong>
                <input type="text" name="VOTANTECEDULA"  value="{{ $postulantes->VOTANTECEDULA }}" class="form-control" placeholder="CÉDULA">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CARGO:</strong>
                <input type="text" name="POSTULANTECARGO"  value="{{ $postulantes->POSTULANTECARGO }}" class="form-control" placeholder="CARGO">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>PARTIDO POLÍTICO:</strong>
                <input type="text" name="POSTULANTEPARTIDO"  value="{{ $postulantes->POSTULANTEPARTIDO }}" class="form-control" placeholder="PARTIDO POLÍTICO">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NÚMERO DE LISTA:</strong>
                <input type="text" name="POSTULANTENUMEROLISTA"  value="{{ $postulantes->POSTULANTENUMEROLISTA }}" class="form-control" placeholder="NÚMERO DE LISTA">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CANTIDAD VOTOS:</strong>
                <input type="text" name="CANTIDADVOTOS"  value="{{ $postulantes->CANTIDADVOTOS }}" class="form-control" placeholder="CANTIDAD VOTOS">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>TIPO VOTO:</strong>
                <input type="text" name="TIPOVOTO"  value="{{ $postulantes->TIPOVOTO }}" class="form-control" placeholder="CANTIDAD VOTOS">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>FOTO DE LA LISTA:</strong>
                <div class='box'>
                    <div class="js--image-preview"></div>
                    <div class="upload-options">
                        <label>
                            <input type="file" name="POSTULANTEFOTOLISTA"  value="{{ $postulantes->POSTULANTEFOTOLISTA }}" class="image-upload" accept="image/*" />
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">ENVIAR</button>
        </div>
    </div>

</form>
@endsection