@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
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
                            <label for="VOTANTEPASSWORD" class="col-md-4 col-form-label text-md-right">PASSWORD</label>

                            <div class="col-md-6">
                                <input id="VOTANTEPASSWORD" type="password" class="form-control @error('VOTANTEPASSWORD') is-invalid @enderror" name="VOTANTEPASSWORD" value="{{ old('VOTANTEPASSWORD') }}" required autocomplete="VOTANTEPASSWORD" autofocus>

                                @error('VOTANTEPASSWORD')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="VOTANTENOMBRES" class="col-md-4 col-form-label text-md-right">NOMBRES</label>

                            <div class="col-md-6">
                                <input id="VOTANTENOMBRES" type="text" class="form-control @error('VOTANTENOMBRES') is-invalid @enderror" name="VOTANTENOMBRES" value="{{ old('VOTANTENOMBRES') }}" required autocomplete="VOTANTENOMBRES" autofocus>

                                @error('VOTANTENOMBRES')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="VOTANTEAPELLIDOS" class="col-md-4 col-form-label text-md-right">APELLIDOS</label>

                            <div class="col-md-6">
                                <input id="VOTANTEAPELLIDOS" type="text" class="form-control @error('VOTANTEAPELLIDOS') is-invalid @enderror" name="VOTANTEAPELLIDOS" value="{{ old('VOTANTEAPELLIDOS') }}" required autocomplete="VOTANTEAPELLIDOS" autofocus>

                                @error('VOTANTEAPELLIDOS')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="VOTANTEFECHANACIMIENTO" class="col-md-4 col-form-label text-md-right">FECHA DE NACIMIENTO</label>

                            <div class="col-md-6">
                                <input id="VOTANTEFECHANACIMIENTO" type="date" class="form-control @error('VOTANTEFECHANACIMIENTO') is-invalid @enderror" name="VOTANTEFECHANACIMIENTO" value="{{ old('VOTANTEFECHANACIMIENTO') }}" required autocomplete="VOTANTEFECHANACIMIENTO" autofocus>

                                @error('VOTANTEFECHANACIMIENTO')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="VOTANTEPROVINCIA" class="col-md-4 col-form-label text-md-right">PROVINCIA</label>

                            <div class="col-md-6">
                                <input id="VOTANTEPROVINCIA" type="text" class="form-control @error('VOTANTEPROVINCIA') is-invalid @enderror" name="VOTANTEPROVINCIA" value="{{ old('VOTANTEPROVINCIA') }}" required autocomplete="VOTANTEPROVINCIA" autofocus>

                                @error('VOTANTEPROVINCIA')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="VOTANTECANTON" class="col-md-4 col-form-label text-md-right">CANTÓN</label>

                            <div class="col-md-6">
                                <input id="VOTANTECANTON" type="text" class="form-control @error('VOTANTECANTON') is-invalid @enderror" name="VOTANTECANTON" value="{{ old('VOTANTECANTON') }}" required autocomplete="VOTANTECANTON" autofocus>

                                @error('VOTANTECANTON')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="VOTANTECIRCUNSCRIPCION" class="col-md-4 col-form-label text-md-right">CIRCUNSCRIPCIÓN</label>

                            <div class="col-md-6">
                                <input id="VOTANTECIRCUNSCRIPCION" type="text" class="form-control @error('VOTANTECIRCUNSCRIPCION') is-invalid @enderror" name="VOTANTECIRCUNSCRIPCION" value="{{ old('VOTANTECIRCUNSCRIPCION') }}" required autocomplete="VOTANTECIRCUNSCRIPCION" autofocus>

                                @error('VOTANTECIRCUNSCRIPCION')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="VOTANTEPARROQUIA" class="col-md-4 col-form-label text-md-right">PARROQUIA</label>

                            <div class="col-md-6">
                                <input id="VOTANTEPARROQUIA" type="text" class="form-control @error('VOTANTEPARROQUIA') is-invalid @enderror" name="VOTANTEPARROQUIA" value="{{ old('VOTANTEPARROQUIA') }}" required autocomplete="VOTANTEPARROQUIA" autofocus>

                                @error('VOTANTEPARROQUIA')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="VOTANTETIPO" class="col-md-4 col-form-label text-md-right">TIPO</label>

                            <div class="col-md-6">
                                <input id="VOTANTETIPO" type="text" class="form-control @error('VOTANTETIPO') is-invalid @enderror" name="VOTANTETIPO" value="{{ old('VOTANTETIPO') }}" required autocomplete="VOTANTETIPO" autofocus>

                                @error('VOTANTETIPO')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="VOTANTEFOTO" class="col-md-4 col-form-label text-md-right">FOTO</label>

                            <div class="col-md-6">
                                <input id="VOTANTEFOTO" type="file" class="form-control @error('VOTANTEFOTO') is-invalid @enderror" name="VOTANTEFOTO" value="{{ old('VOTANTEFOTO') }}" required autocomplete="VOTANTEFOTO" autofocus>

                                @error('VOTANTEFOTO')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <!--
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        

                        
                        -->

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="button button5">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection