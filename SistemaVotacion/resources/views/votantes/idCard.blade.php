@extends('layouts.app')
@section('content')

<div class="card4">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div style="text-align:center;">
            <h3> Certificado de votacion del ciudadano: <br> {{Auth::user()->VOTANTENOMBRES}} {{Auth::user()->VOTANTEAPELLIDOS}}</h3>
        </div>
    </div>
</div>
                @php
                use App\Models\Postulantes;
                $date= date("Y-m-d");
                @endphp
                <div style="text-align:center;">
                    <strong>FECHA:</strong>
                    <p class="card-title">{{$date}}</p>
                </div>
    <table style="width:100%;">
    <div class="row no-gutters">
        <div class="col-md-8">
            <div class="card-body">
            <td>
                <div class="form-group">
                <p class="card-title">{{Auth::user()->VOTANTECEDULA}}</strong></p>
                <strong>CÉDULA No</strong>
                </div>
                <div class="form-group">
                <img src="{{Auth::user()->get_image}}" class="card-img" alt="...">
                </div>
                <div class="form-group">
                <p class="card-title">{{Auth::user()->VOTANTEAPELLIDOS}} {{Auth::user()->VOTANTENOMBRES}}</p>
                <strong>APELLIDOS Y NOMBRES</strong>
                </div>
                </td>
                <td>
                <div class="form-group">
                    <strong>PROVINCIA:</strong>
                    {{Auth::user()->VOTANTEPROVINCIA}}
                </div>
                <div class="form-group">
                    <strong>CANTÓN:</strong>
                   {{Auth::user()->VOTANTECANTON}}
                </div>
                <div class="form-group">
                    <strong>CIRCUNSCRIPCIÓN:</strong>
                    {{Auth::user()->VOTANTECIRCUNSCRIPCION}}
                </div>
                <div class="form-group">
                    <strong>PARROQUIA:</strong>
                    {{Auth::user()->VOTANTEPARROQUIA}}
                </div>
                <div class="form-group">
                <strong>COMPARTIR EN: </strong>
                <a href="http://www.facebook.com/sharer.php?u=https://eva.puce.edu.ec/" target="_blank">Facebook</a>
                </div>
                </td>
            </div>
        </div>
    </div>
    </table>
</div>
@endsection