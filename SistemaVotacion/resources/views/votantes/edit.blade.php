@extends('votantes.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit postulante</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('votantes.index') }}"> Back</a>
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
//, , , , ,
//, , , ,  
//value="{{ $votantes->POSTULANTEID }}" 
<form action="{{ route('votantes.update',$votantes->VOTANTECEDULA )}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CÉDULA:</strong>
                <input type="text" name="VOTANTECEDULA" value="{{ $votantes->VOTANTECEDULA }}" class="form-control" placeholder="CÉDULA">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NOMBRES:</strong>
                <input type="text" name="VOTANTENOMBRES" value="{{ $votantes->VOTANTENOMBRES }}" class="form-control" placeholder="NOMBRES DEL VOTANTE">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>APELLIDOS:</strong>
                <input type="text" name="VOTANTEAPELLIDOS" value="{{ $votantes->VOTANTEAPELLIDOS }}" class="form-control" placeholder="APELLIDOS DEL VONTATE">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>FECHA:</strong>
                <input type="text" name="VOTANTEFECHANACIMIENTO" value="{{ $votantes->VOTANTEFECHANACIMIENTO }}" class="form-control" placeholder="FECHA DE NACIMIENTO DEL VOTANTE">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>PROVINCIA:</strong>
                <input type="text" name="VOTANTEPROVINCIA" value="{{ $votantes->VOTANTEPROVINCIA }}" class="form-control" placeholder="PROVINCIA DEL VOTANTE">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CANTÓN:</strong>
                <input type="text" name="VOTANTECANTON" value="{{ $votantes->VOTANTECANTON }}" class="form-control" placeholder="CANTÓN DEL VOTANTE">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CIRCUNSCRIPCIÓN:</strong>
                <input type="text" name="VOTANTECIRCUNSCRIPCION" value="{{ $votantes->VOTANTECIRCUNSCRIPCION }}" class="form-control" placeholder="CIRCUNSCRIPCIÓN DEL VOTANTE">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>PARROQUIA:</strong>
                <input type="text" name="VOTANTEPARROQUIA" value="{{ $votantes->VOTANTEPARROQUIA }}" class="form-control" placeholder="PARROQUIA DEL VOTANTE">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>TIPO:</strong>
                <input type="text" name="VOTANTETIPO" value="{{ $votantes->VOTANTETIPO }}" class="form-control" placeholder="TIPO DE VOTANTE">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CÓDIGO DE BARRAS:</strong>
                <input type="text" name="VOTANTECODIGOBARRAS" value="{{ $votantes->VOTANTECODIGOBARRAS }}" class="form-control" placeholder="CÓDIGO DE BARRAS">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>FOTO DEL VOTANTE:</strong>
                <div class='box'>
                    <div class="js--image-preview"></div>
                    <div class="upload-options">
                        <label>
                            <input type="file" name="VOTANTEFOTO" value="{{ $votantes->VOTANTEFOTO }}" class="image-upload" accept="image/*" />
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