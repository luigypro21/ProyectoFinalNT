@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="VOTANTECEDULA" class="col-md-4 col-form-label text-md-right">NÚMERO DE CÉDULA</label>

                            <div class="col-md-6">
                                <input id="VOTANTECEDULA" type="text" class="form-control @error('VOTANTECEDULA') is-invalid @enderror" name="VOTANTECEDULA" value="{{ old('VOTANTECEDULA') }}" required autocomplete="VOTANTECEDULA" autofocus>

                                @error('VOTANTECEDULA')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="VOTANTECODIGOBARRAS" class="col-md-4 col-form-label text-md-right">CONTRASEÑA</label>

                            <div class="col-md-6">
                                {{csrf_field()}}
                                <input id="VOTANTECODIGOBARRAS" type="password" class="form-control @error('VOTANTECODIGOBARRAS') is-invalid @enderror" name="VOTANTECODIGOBARRAS" required autocomplete="current-password">

                                @error('VOTANTECODIGOBARRAS')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recordar mi sesión') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection