@extends('layouts.app')

@section('content')

    <nav class="navbar bg-body-tertiary justify-content-center">
        <div class="container-fluid">
            <div class="d-flex justify-content-center mx-auto">
                <h2><strong>Mercado Actual</strong></h2>
            </div>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg bg-body-tertiary justify-content-center">
        <div class="container-fluid">
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">Volver A Inicio</a>
                    <a class="nav-link" href="#">Mi cuenta</a>
                    <a class="nav-link" href="#">Análisis</a>
                    <a class="nav-link" href="#">Contacto</a>
                </div>
            </div>
        </div>
    </nav>

    <nav class="navbar bg-body-tertiary justify-content-center">
        <form class="container-fluid" style="max-width: 400px;">
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="text" class="form-control" placeholder="Buscar empresas" aria-label="Buscar empresas" aria-describedby="basic-addon1">
            </div>
        </form>
    </nav>

    <div class="container text-center">
        <div class="row align-items-center justify-content-center"><!-- Añadida la clase justify-content-center -->
            <div class="col-md-6 d-flex flex-column align-items-center">
                <img src="{{ asset('images/1.png') }}" alt="Logo de Microsoft" class="img-fluid third-width-image" style="max-height: 100px; "><br>
                <a>Microsoft S. de R.L de C.V<br>Activos corrientes y fijos.<br>Precio por acción actual: $459.64<br>Precio anterior: $229.82</a>
                <br>
                <button type="button" class="btn btn-success mb-2">Ver más...</button>
                <button type="button" class="btn btn-info">Comparar</button>
            </div>
            <div class="col-md-6 d-flex flex-column align-items-center">
                <img src="{{ asset('images/apple2.png') }}" alt="Logo de Apple" class="img-fluid third-width-image" style="max-height: 100px;"><br>
                <a>Apple Inc.<br>Activos corrientes y fijos.<br>Precio por acción actual: $965.37<br>Precio anterior: $482.58</a>
                <br>
                <button type="button" class="btn btn-success mb-2">Ver más...</button>
                <button type="button" class="btn btn-info">Comparar</button>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-6">
                <img src="{{ asset('images/attnt.png') }}" alt="Logo de At&T" class="img-fluid third-width-image" style="max-height: 100px;"><br>
                <a>AT&T Comunicaciones Digitales<br>S. de R.L de C.V.<br>Activos tangibles e intangibles.<br>Precio por acción actual: $239.94<br>Precio anterior: $119.97</a>
                <br>
                <button type="button" class="btn btn-success">Ver más...</button>
                <button type="button" class="btn btn-info">Comparar</button>
            </div>
            <div class="col-md-6">
                <br><img src="{{ asset('images/sony.jpg') }}" alt="Logo de Sony" class="img-fluid third-width-image" style="max-height: 100px;"><br>
                <a>Sony de México S.A de C.V.<br>Activos corrientes y fijos.<br>Precio por acción actual: $452.21<br>Precio anterior: $226.10</a>
                <br>
                <button type="button" class="btn btn-success">Ver más...</button>
                <button type="button" class="btn btn-info">Comparar</button>
            </div>
        </div>
    </div>


@endsection
