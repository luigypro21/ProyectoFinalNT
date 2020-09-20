@extends('votantes.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>votantes</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('votantes.create') }}"> AÑADIR VOTANTE</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>CÉDULA</th>
        <th>NOMBRES DEL VOTANTE</th>
        <th>APELLIDOS DEL VONTATE</th>
        <th>FECHA DE NACIMIENTO DEL VOTANTE</th>
        <th>PROVINCIA DEL VOTANTE</th>
        <th>CANTÓN DEL VOTANTE</th>
        <th>CIRCUNSCRIPCIÓN DEL VOTANTE</th>
        <th>PARROQUIA DEL VOTANTE</th>
        <th>TIPO DE VOTANTE</th>
        <th>PARROQUIA DEL VOTANTE</th>
        <th>CÓDIGO DE BARRAS</th>
        <th>FOTO DEL VOTANTE</th>
    </tr>

    @foreach ($votantes as $votante)
    <tr>
        <td>{{ $votante->VOTANTECEDULA }}</td>
        <td>{{ $votante->VOTANTENOMBRES }}</td>
        <td>{{ $votante->VOTANTEAPELLIDOS }}</td>
        <td>{{ $votante->VOTANTEFECHANACIMIENTO }}</td>
        <td>{{ $votante->VOTANTEPROVINCIA }}</td>
        <td>{{ $votante->VOTANTECANTON }}</td>
        <td>{{ $votante->VOTANTECIRCUNSCRIPCION }}</td>
        <td>{{ $votante->VOTANTEPARROQUIA }}</td>
        <td>{{ $votante->VOTANTETIPO }}</td>
        <td>{{ $votante->VOTANTECODIGOBARRAS }}</td>
        <td>
            @if($postulante->VOTANTEFOTO)
                <img src="{{$votante->get_image}}" class="card-img-top">
            @endif
        </td>
        <td>
            <form action="{{ route('votantes.destroy',$votante->VOTANTECEDULA) }}" method="POST">

                <a class="btn btn-info" href="{{ route('votantes.show',$votante->VOTANTECEDULA) }}">VER</a>

                <a class="btn btn-primary" href="{{ route('votantes.edit',$votante->VOTANTECEDULA) }}">EDITAR</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">ELIMINAR</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>



@endsection