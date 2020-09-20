@extends('postulantes.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>POSTULANTES</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('postulantes.create') }}"> AÑADIR POSTULANTE</a>
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
        <th>ID</th>
        <th>NÚMERO DE PAPELETA</th>
        <th>CÉDULA</th>
        <th>CARGO</th>
        <th>PARTIDO</th>
        <th>NÚMERO DE LISTA</th>
        <th>FOTO DE LISTA</th>
        <th>VOTOS</th>
        <th>TIPO VOTO</th>
    </tr>

    @foreach ($postulantes as $postulante)
    <tr>
        <td>{{ $postulante->POSTULANTEID }}</td>
        <td>{{ $postulante->PAPELETANUMERO }}</td>
        <td>{{ $postulante->VOTANTECEDULA }}</td>
        <td>{{ $postulante->POSTULANTECARGO }}</td>
        <td>{{ $postulante->POSTULANTEPARTIDO }}</td>
        <td>{{ $postulante->POSTULANTENUMEROLISTA }}</td>
        <td>
            @if($postulante->POSTULANTEFOTOLISTA)
                <img src="{{$postulante->get_image}}" class="card-img-top">
            @endif
        </td>
        <td>{{ $postulante->CANTIDADVOTOS }}</td>
        <td>{{ $postulante->TIPOVOTO }}</td>
        <td>
            <form action="{{ route('postulantes.destroy',$postulante->POSTULANTEID) }}" method="POST">

                <a class="btn btn-info" href="{{ route('postulantes.show',$postulante->POSTULANTEID) }}">VER</a>

                <a class="btn btn-primary" href="{{ route('postulantes.edit',$postulante->POSTULANTEID) }}">EDITAR</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">ELIMINAR</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>



@endsection