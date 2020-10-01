@extends('papeletas.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>PAPELETAS</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('papeletas.create') }}"> AÑADIR PAPELETA</a>
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
        <th>NÚMERO DE PAPELETA</th>
        <th>CÉDULA DEL VOTANTE</th>
        <th>PAPELETA TIPO</th>
        <th>FECHA DE VOTACIÓN</th>
    </tr>

    @foreach ($papeletas as $papeleta)
    <tr>
        <td>{{ $papeleta->PAPELETANUMERO }}</td>
        <td>{{ $papeleta->VOTANTECEDULA }}</td>
        <td>{{ $papeleta->PAPELETATIPO }}</td>
        <td>{{ $papeleta->PAPELETAFECHAVOTACION }}</td>
        <td>
            <form action="{{ route('papeletas.destroy',$papeleta->PAPELETANUMERO) }}" method="POST">

                <a class="btn btn-info" href="{{ route('papeletas.show',$papeleta->PAPELETANUMERO) }}">VER</a>

                <a class="btn btn-primary" href="{{ route('papeletas.edit',$papeleta->PAPELETANUMERO) }}">EDITAR</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">ELIMINAR</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>



@endsection