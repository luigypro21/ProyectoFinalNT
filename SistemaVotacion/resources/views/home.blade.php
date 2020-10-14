@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('¡Todo listo, ya estás registrado!, para continuar con el proceso de votación ingresa el día 08/02/2021 con el código :')}}
                    {{ Auth::user()->VOTANTECODIGOBARRAS }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
