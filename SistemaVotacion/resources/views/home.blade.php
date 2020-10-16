@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card ">
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
                    {{ __('¡Todo listo, ya estás registrado!, para continuar con el proceso de votación ingresa el día 2021-02-08 con el código : ')}}
                       
                            
                        
                    @else
                    <div class="candidatos-tittle">
                        <h2>Candidatos Presidenciales</h2>
                    </div>
                    <div class="card-postulantes">
                        <form >
                            @foreach ($postulantes as $postulante)
                            <div class="card item" style="width: 18rem;">
                                <div class="card-body" style="text-align: center;">
                                    <h3 class="card-title"><strong>{{$postulante->POSTULANTEPARTIDO}}</strong></h3>
                                </div>
                                <div class="card-body" style="text-align: center;">
                                    <h3 class="card-title"><strong>{{$postulante->POSTULANTENUMEROLISTA}}</strong></h3>
                                </div>
                                @if($postulante->POSTULANTEFOTOLISTA)
                                <img class="card-img-top" style="height: 100px;" src="{{$postulante->get_image}}" alt="Card image cap">
                                @endif
                                @if($postulante->POSTULANTEFOTO)
                                <img class="card-img-top" style="height: 250px;" src="{{$postulante->get_image2}}" alt="Card image cap">
                                @endif
                                <div class="card-body" style="text-align: center;">
                                    <h5 class="card-title">{{$postulante->POSTULANTENOMBRE}} {{$postulante->POSTULANTEAPELLIDO}}</h5>
                                    <p class="card-text"><strong>{{$postulante->POSTULANTECARGO}}</strong></p>
                                </div>
                                @if($postulante->VICEFOTO)
                                <img class="card-img-top" style="height: 250px;" src="{{$postulante->get_image3}}" alt="Card image cap">
                                @endif
                                <div class="card-body" style="text-align: center;">
                                    <h5 class="card-title">{{$postulante->VICENOMBRE}} {{$postulante->VICEAPELLIDO}}</h5>
                                    <p class="card-text"><strong>VICEPRESIDENTE</strong></p>
                                </div>
                                <div class="card-body" style="text-align: center;">
                                    <label class="radio-inline" style="font-size: 20px;">
                                        <input type="radio" name="optradio"> VOTAR
                                    </label>
                                </div>
                            </div>
                            @endforeach
                            
                        </form>
                        <a class="btn btn-info" href="{{ route('votantes.show',Auth::user()->VOTANTECEDULA) }}">VER</a>
                    </div>
                    @endif
                </div>
            </div>

        </div>
    </div>
</div>
@endsection