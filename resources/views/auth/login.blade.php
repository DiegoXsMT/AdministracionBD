@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="text-center">Inicio de sesión</h1>

        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="row justify-content-center">
                        <div class="col-md-9 text-center">
                            <p>Inicia sesion ahora y comienza a formar el control de tu vida financiera</p>
                            <hr>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="row mb-3">
                                    <label for="email"
                                        class="col-md-4 col-form-label text-md-end text-center">{{ __('Correo electronico') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password"
                                        class="col-md-4 col-form-label text-md-end text-center">{{ __('Contraseña') }}</label>

                                    <div class="col-md-6 justify-content-end">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link text-center}}" style="text-decoration: none;"
                                                href="{{ route('password.request') }}">
                                                {{ __('¿Olvidaste tu contraseña?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>

                                <div class="row mb-3 justify-content-center align-items-center">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <button type="submit" class="btn btn-primary text-center">
                                                    {{ __('Iniciar sesión') }}
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <a href="/register">¿Aun no tienes una cuenta?,crea una...</a>
                                </div>

                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="position-static bottom-0 end-0 p-3 d-flex justify-content-end">
        <div class="rounded border border-dark" style="width: 200px; height: 100px;">
            <div class="row justify-content-center">
                <div class="text-center">
                    <p>
                        Contacto
                        <br>
                        ¿Necesitas asesoría? Estamos para ayudarte
                        <br>
                        <a href="#" style="text-decoration: none;">Comunícate con nosotros</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
