@extends('layouts.app')

@section('template_title')
    Empresas
@endsection

@section('styles')
    <style>
        /* Estilo para las imágenes en los cards */
        .card-img {
            width: 50%; /* Ancho completo del contenedor */
            height: 150px; /* Altura fija, puedes ajustar este valor según tus necesidades */
            object-fit: cover; /* Escalar y recortar la imagen para que encaje en las dimensiones */
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Listado de Empresas</h1>
                <a href="{{ route('empresas.create') }}" class="btn btn-primary">Registrar Empresa</a>
                <div class="row mt-3">
                    @foreach ($empresas as $empresa)
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <div class="card-header">
                                    {{ $empresa->nombre }}
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        <strong>Sector:</strong> {{ $empresa->sector }} <br>
                                        <strong>NIF:</strong> {{ $empresa->NIF }} <br>
                                        <strong>Fecha Inicio Operaciones:</strong> {{ $empresa->fecha_inicio_operaciones }} <br>
                                        <strong>Situación Fiscal:</strong> {{ $empresa->situacion_fiscal }} <br>
                                        <strong>Domicilio:</strong> {{ $empresa->domicilio }} <br>
                                    </p>
<<<<<<< HEAD
                                    <!-- Ajusta la altura y el ancho de la imagen -->
                                    <img src="{{ asset('storage/' . $empresa->imagen) }}" alt="{{ $empresa->nombre }}" class="img-fluid card-img-custom">
=======
                                    <img src="{{ asset('storage/' . $empresa->imagen) }}" alt="{{ $empresa->nombre }}"
                                         class="card-img" style="width: 50%; height: 150px;">
>>>>>>> ccfcf453d003645cb3fa4e60ce544b0c22d577d2
                                </div>
                                <div class="card-footer text-muted">
                                    ID: {{ $empresa->id_empresa }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
