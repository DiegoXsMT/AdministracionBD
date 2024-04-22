@extends('layouts.app')

@section('template_title')
    Crear Nueva Empresa
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1></h1>
                <form id="crearEmpresaForm" method="POST" action="{{ route('empresas.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="nombre" class="form-label fs-5">Nombre de la empresa:</label>
                        <input type="text" class="form-control form-control-lg" id="nombre" name="nombre" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="sector" class="form-label fs-5">Sector:</label>
                        <select class="form-select form-select-lg" id="sector" name="sector" required>
                            <option value="" disabled selected>Selecciona un sector</option>
                            @foreach ($sectores as $sector)
                                <option value="{{ $sector }}">{{ $sector }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="NIF" class="form-label fs-5">NIF:</label>
                        <input type="text" class="form-control form-control-lg" id="NIF" name="NIF" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="situacion_fiscal" class="form-label fs-5">Situación fiscal:</label>
                        <input type="text" class="form-control form-control-lg" id="situacion_fiscal" name="situacion_fiscal" required>
                    </div>
            </div>
            <div class="col-md-4 border-end">
                <div class="form-group mb-3">
                    <label for="fecha_inicio_operaciones" class="form-label fs-5">Inicio de operaciones:</label>
                    <input type="date" class="form-control form-control-lg" id="fecha_inicio_operaciones" name="fecha_inicio_operaciones" required>
                </div>
                <div class="form-group mb-3">
                    <label for="domicilio" class="form-label fs-5">Domicilio:</label>
                    <input type="text" class="form-control form-control-lg" id="domicilio" name="domicilio" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <h4>Logo de la Empresa</h4>
                </div>
                <div id="imagenPreview" class="text-center mb-3">
                    <!-- Aquí se mostrará la vista previa -->
                </div>
                <div class="form-group text-center mb-3">
                    <label for="imagen" class="form-label fs-5">Seleccionar imagen:</label>
                    <input type="file" class="form-control-file form-control-lg" id="imagen" name="imagen" onchange="previewImage(event)" accept="image/*">
                </div>
                <div class="form-group text-center">
                    <button type="button" class="btn btn-danger btn-lg me-2" onclick="cancelarFormulario()">Cancelar</button>
                    <button type="submit" class="btn btn-success btn-lg">Guardar</button>
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>
    <script>
        function previewImage(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const preview = document.getElementById('imagenPreview');
                    preview.innerHTML = `<img src="${e.target.result}" alt="Vista previa de la imagen" style="max-width: 100%; max-height: 200px;">`;
                };
                reader.readAsDataURL(file);
            }
        }

        function cancelarFormulario() {
            document.getElementById('crearEmpresaForm').reset();
            document.getElementById('imagenPreview').innerHTML = ''; // Limpia la vista previa de la imagen
        }
    </script>
@endsection
