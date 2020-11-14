@extends('layouts.app')

@section('content')
<div class="container">
        <div class="col-md-8">
            <div class="card2 ">
                <div class="card-header">{{ __('Sistema de Votación') }}</div>

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
                    {{ __('¡Gracias por su voto')}}
                    @else
                    <div class="candidatos-tittle">
                        <h2>Candidatos Presidenciales</h2>
                    </div>
                    <div style="overflow-x:auto;">
                            <table style="width:100%;">
                    <div class="card-postulantes">
                        <form method="GET" action="{{ route('home-update') }}">
                        @foreach ($postulantes as $postulante)
                        <td>
                            <div class="card item" style="width: 18rem;">
                                <div class="card-body" style="text-align: center;">
                                    <h5 class="card-title"><strong>{{$postulante->POSTULANTEPARTIDO}}</strong></h5>
                                </div>
                                <div class="card-body" style="text-align: center;">
                                    <h5 class="card-title"><strong>{{$postulante->POSTULANTENUMEROLISTA}}</strong></h5>
                                </div>
                                @if($postulante->POSTULANTEFOTOLISTA)
                                <div class="card-body" style="text-align: center;">
                                <img class="card-img-top" style="height: 100px; text-align: center;" src="{{$postulante->get_image}}" alt="imagen lista">
                                </div>
                                @endif
                                @if($postulante->POSTULANTEFOTO)
                                <div class="card-body" style="text-align: center;">
                                <img class="card-img-top" style="height: 250px;" src="{{$postulante->get_image2}}" alt="imagen presidente">
                                </div>
                                @endif
                                <div class="card-body" style="text-align: center;">
                                    <h5 class="card-title">{{$postulante->POSTULANTENOMBRE}} {{$postulante->POSTULANTEAPELLIDO}}</h5>
                                    <p class="card-text"><strong>{{$postulante->POSTULANTECARGO}}</strong></p>
                                </div>
                                @if($postulante->VICEFOTO)
                                <div class="card-body" style="text-align: center;">
                                <img class="card-img-top" style="height: 250px;" src="{{$postulante->get_image3}}" alt="imagen vicepresidente">
                                </div>
                                @endif
                                <div class="card-body" style="text-align: center;">
                                    <h5 class="card-title">{{$postulante->VICENOMBRE}} {{$postulante->VICEAPELLIDO}}</h5>
                                    <p class="card-text"><strong>VICEPRESIDENTE</strong></p>
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


                        <a class="button button5" href="{{ route('votantes.show',Auth::user()->VOTANTECEDULA) }}">VER</a>
                    </div>
                    @endif
                </div>
            </div>

        </div>
</div>
@endsection