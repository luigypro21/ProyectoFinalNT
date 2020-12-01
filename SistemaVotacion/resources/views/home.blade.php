@extends('layouts.app')

@section('content')
<div class="col-md-8">
    <div class="cardesp">
        <div class="card-header">{{ __('Candidatos Presidenciales') }}</div>

        <div class="card-body ">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif

            @php
            use App\Models\Postulantes;
            $date= date("Y-m-d");
            $postulantes = Postulantes::all();
            @endphp

            @if($date=="2021-02-08")
            {{ __('¡Todo listo, ya estás registrado!, para continuar con el proceso de votación ingresa el día 2021-02-08 con tu cedula y contraseña ')}}

            @elseif(Auth::user()->VOTO)
            {{ __('¡Gracias por su voto!')}}
            @else
            <div class="candidatos-tittle">
            </div>
            <div style="overflow-x:auto;">
                <table style="width:60%;height:60%">
                    <div class="card-postulantes">
                        @php
                        $array = array();
                        @endphp
                        <form method="GET" action="{{ route('home-update') }}">
                            @foreach ($postulantes as $postulante)
                            @if ($postulante->POSTULANTEID=='BL' || $postulante->POSTULANTEID=='NL')
                            @php
                            array_push($array, $postulante);
                            @endphp

                            @else
                            <td>
                                <div class="card item" style="width: 10rem;">
                                    <div class="card-body" style="text-align: center;">
                                        <h5 class="card-title"><strong>{{$postulante->POSTULANTEPARTIDO}}</strong></h5>
                                    </div>
                                    <div class="card-body" style="text-align: center;">
                                        <h5 class="card-title">{{$postulante->POSTULANTENUMEROLISTA}}</h5>
                                    </div>
                                    @if($postulante->POSTULANTEFOTOLISTA)
                                    <p class="card-text"><strong>{{$postulante->POSTULANTECARGO}}</strong></p>
                                    <div class="card-body" style="text-align: center;">
                                        <img class="card-img-top" id="ImgLogo" src="{{$postulante->get_image}}" alt="imagen lista">
                                    </div>
                                    @endif
                                    @if($postulante->POSTULANTEFOTO)
                                    <div class="card-body" style="text-align: center;">
                                        <img class="card-img-top" id="ImgFotoLista" src="{{$postulante->get_image2}}" alt="imagen presidente">
                                    </div>
                                    @endif
                                    <div class="card-body" style="text-align: center;">
                                        <h5 class="card-title">{{$postulante->POSTULANTENOMBRE}} {{$postulante->POSTULANTEAPELLIDO}}</h5>
                                    </div>
                                    @if($postulante->VICEFOTO)
                                    <div class="card-body" style="text-align: center;">
                                        <p class="card-text"><strong>VICEPRESIDENTE</strong></p>
                                        <img class="card-img-top" id="ImgFotoLista" src="{{$postulante->get_image3}}" alt="imagen vicepresidente">
                                    </div>
                                    @endif
                                    <div class="card-body" style="text-align: center;">
                                        <h5 class="card-title">{{$postulante->VICENOMBRE}} {{$postulante->VICEAPELLIDO}}</h5>
                                    </div>
                                    <div class="card-body" style="text-align: center;">
                                        <label class="radio-inline" style="font-size: 20px;">
                                            <input type="radio" name="optradio" value="{{$postulante->POSTULANTEID}}"> VOTAR
                                        </label>
                                    </div>
                                </div>
                            </td>
                            @endif
                            @endforeach
                            @foreach ($array as $postulante)
                            <td>
                                <div class="card item" style="width: 10rem;">
                                    <div class="card-body" style="text-align: center;">
                                        <h5 class="card-title">{{$postulante->POSTULANTENOMBRE}}</h5>
                                    </div>
                                    <div class="card-body" style="text-align: center;">
                                        <label class="radio-inline" style="font-size: 20px;">
                                            <input type="radio" name="optradio" value="{{$postulante->POSTULANTEID}}"> VOTAR
                                        </label>
                                    </div>
                                </div>
                            </td>
                            @endforeach
                </table>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="button button5">ENVIAR VOTO</button>
            </div>
            </form>
        </div>
        @endif
    </div>
</div>
</div>
@endsection