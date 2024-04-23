@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


                    <div class="card-body text-center">
                        <h1 class="text-center">Registrate ahora</h1>
                        <br>
                        <p class="text-center">Es momento de hacer crecer tu dinero, regístrate y empieza a invertir en las
                            grandes
                            corporaciones del mundo.</p>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="ap_p"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Apellido paterno') }}</label>

                                <div class="col-md-6">
                                    <input id="ap_p" type="text"
                                        class="form-control @error('ap_p') is-invalid @enderror" name="ap_p"
                                        value="{{ old('ap_p') }}" required autocomplete="ap_p" autofocus>

                                    @error('ap_p')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="ap_m"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Apellido materno') }}</label>

                                <div class="col-md-6">
                                    <input id="ap_m" type="text"
                                        class="form-control @error('ap_m') is-invalid @enderror" name="ap_m"
                                        value="{{ old('ap_m') }}" required autocomplete="ap_m" autofocus>

                                    @error('ap_m')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="fecha_nac"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Fecha de Nacimiento') }}</label>

                                <div class="col-md-6">
                                    <input id="fecha_nac" type="date"
                                        class="form-control @error('fecha_nac') is-invalid @enderror" name="fecha_nac"
                                        value="{{ old('fecha_nac') }}" required autocomplete="fecha_nac">

                                    @error('fecha_nac')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="curp"
                                    class="col-md-4 col-form-label text-md-end">{{ __('CURP') }}</label>

                                <div class="col-md-6">
                                    <input id="curp" type="text"
                                        class="form-control @error('curp') is-invalid @enderror" name="curp"
                                        value="{{ old('curp') }}" required autocomplete="curp" autofocus>

                                    @error('curp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="no_telefono"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Número de Teléfono') }}</label>

                                <div class="col-md-6">
                                    <input id="no_telefono" type="text"
                                        class="form-control @error('no_telefono') is-invalid @enderror" name="no_telefono"
                                        value="{{ old('no_telefono') }}" required autocomplete="no_telefono" autofocus>

                                    @error('no_telefono')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="rfc"
                                    class="col-md-4 col-form-label text-md-end">{{ __('RFC') }}</label>

                                <div class="col-md-6">
                                    <input id="rfc" type="text"
                                        class="form-control @error('rfc') is-invalid @enderror" name="rfc"
                                        value="{{ old('rfc') }}" required autocomplete="rfc" autofocus>

                                    @error('rfc')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="no_identificacion"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Número de Identificación') }}</label>

                                <div class="col-md-6">
                                    <input id="no_identificacion" type="text"
                                        class="form-control @error('no_identificacion') is-invalid @enderror"
                                        name="no_identificacion" value="{{ old('no_identificacion') }}" required
                                        autocomplete="no_identificacion" autofocus>

                                    @error('no_identificacion')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Agregar más campos aquí -->

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Correo electronico') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                            <div>
                                <input type="checkbox" id="condiciones" name="terminos" required />
                                <label for="condiciones">Estoy de acuerdo con el <a href="#" target="_blank"
                                        class="enlace-terminos" style="text-decoration: none">Aviso de privacidad</a> y <a
                                        href="#" target="_blank" class="enlace-terminos"
                                        style="text-decoration: none">Términos y condiciones</a> de Mexicana de
                                    inversiones</label>
                            </div>

                            <div class="row mb-1">
                                <div class="">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Registrarse') }}
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
