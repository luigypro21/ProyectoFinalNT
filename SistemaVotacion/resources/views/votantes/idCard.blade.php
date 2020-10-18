@extends('votantes.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Certificado de votacion del votante: {{Auth::user()->VOTANTENOMBRES}} {{Auth::user()->VOTANTEAPELLIDOS}}</h2>
        </div>
    </div>
</div>
<div class="card text-white bg-primary mb-3">
    <div class="row no-gutters">
        <div class="col-md-4">
            <img src="{{Auth::user()->get_image}}" class="card-img" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                @php
                use App\Models\Postulantes;
                $date= date("Y-m-d");
                @endphp
                <div class="form-group">
                    <strong>FECHA:</strong>
                    <p class="card-title">{{$date}}</p>
                </div>
                <div class="form-group">
                    <strong>CÉDULA No:</strong>
                    <p class="card-title">{{Auth::user()->VOTANTECEDULA}}</p>
                </div>
                <div class="form-group">
                    <strong>APELLIDOS Y NOMBRES</strong>
                    <p class="card-title">{{Auth::user()->VOTANTEAPELLIDOS}} {{Auth::user()->VOTANTENOMBRES}}</p>
                </div>
                <div class="form-group">
                    <strong>PROVINCIA:</strong>
                    <p class="card-title">{{Auth::user()->VOTANTEPROVINCIA}}</p>
                </div>
                <div class="form-group">
                    <strong>CANTÓN:</strong>
                    <p class="card-title">{{Auth::user()->VOTANTECANTON}}</p>
                </div>
                <div class="form-group">
                    <strong>CIRCUNSCRIPCIÓN:</strong>
                    <p class="card-title">{{Auth::user()->VOTANTECIRCUNSCRIPCION}}</p>
                </div>
                <div class="form-group">
                    <strong>PARROQUIA:</strong>
                    <p class="card-title">{{Auth::user()->VOTANTEPARROQUIA}}</p>
                </div>
                <?php

                use \Milon\Barcode\DNS1D;
                use Illuminate\Support\Facades\Auth;

                $d = new DNS1D();
                //dd(Auth::user()->VOTANTECODIGOBARRAS);
                echo $d->getBarcodeSVG(Auth::user()->VOTANTECODIGOBARRAS, 'PHARMA2T', 3, 33);
                ?>
            </div>
        </div>

    </div>
</div>
<div class="row">
    <a href="http://www.facebook.com/sharer.php?u=https://eva.puce.edu.ec/" target="_blank">Share on facebook</a>
</div>



@endsection