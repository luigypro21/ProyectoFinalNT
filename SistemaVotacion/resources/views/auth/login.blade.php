@extends('layouts.app')

@section('content')
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                        <div class="form-group row">
                            <label for="VOTANTECEDULA" class="col-md-4 col-form-label text-md-right">NÚMERO DE
                                CÉDULA</label>

                            <div class="col-md-6">
                                <input id="VOTANTECEDULA" type="text" placeholder="Ingrese su número de cédula..."
                                    class="form-control @error('VOTANTECEDULA') is-invalid @enderror" name="VOTANTECEDULA"
                                    value="{{ old('VOTANTECEDULA') }}" required autocomplete="VOTANTECEDULA" placeholder="Ingrese su número de cédula...">

                                @error('VOTANTECEDULA')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="VOTANTEPASSWORD"  placeholder="Ingrese su constraseña..." class="col-md-4 col-form-label text-md-right">CONTRASEÑA</label>

                            <div class="col-md-6">
                                {{ csrf_field() }}
                                <input id="VOTANTEPASSWORD" placeholder="Ingrese su constraseña..." type="password"
                                    class="form-control @error('VOTANTEPASSWORD') is-invalid @enderror"
                                    name="VOTANTEPASSWORD" required autocomplete="current-password">

                                @error('VOTANTEPASSWORD')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recordar mi sesión') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="button button5">
                                    {{ __('Iniciar Sesión') }}
                                </button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection
