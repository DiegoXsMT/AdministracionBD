@extends('layouts.app')

@section('template_title')
    Empresas
@endsection

@section('styles')
    <style>
        .card-img-custom {
            width: 100%;
            max-height: 300px; /* Establece una altura máxima para las imágenes */
            object-fit: cover; /* Evita que las imágenes se estiren o deformen */
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Listado de Empresas</h1>
                <a href="{{ route('empresas.create') }}" class="btn btn-primary">Crear Nueva Empresa</a>
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
                                    <!-- Ajusta la altura y el ancho de la imagen -->
                                    {{--<img src="{{ asset('storage/' . $empresa->imagen) }}" alt="{{ $empresa->nombre }}" class="img-fluid card-img-custom">--}}
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
