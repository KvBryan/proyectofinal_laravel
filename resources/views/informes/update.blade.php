{{-- Heredamos la estructura del archivo app.blade.php --}} 
@extends('layouts.app')  
{{-- Definimos el título --}}  
@section('title', 'Informes') 
{{-- Definimos el contenido --}} 
@section('content')  
    <div class="container mt-5">
        <h1 class="text-center text-primary mb-4">Actualizar Informe</h1>
        <div class="card mx-auto shadow p-4" style="max-width: 600px;">
            <form action="/informes/update/1" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="tipo_informe" class="form-label">Tipo de Informe</label>
                    <input type="text" class="form-control" id="tipo_informe" name="tipo_informe" value="Ejemplo Informe" placeholder="Ingresa el tipo de informe">
                </div>
                <div class="mb-3">
                    <label for="fecha_generacion" class="form-label">Fecha de Generación</label>
                    <input type="date" class="form-control" id="fecha_generacion" name="fecha_generacion" value="2024-01-01">
                </div>
                <div class="mb-3">
                    <label for="ruta_archivo" class="form-label">Ruta del Archivo</label>
                    <input type="text" class="form-control" id="ruta_archivo" name="ruta_archivo" value="/ruta/archivo.pdf" placeholder="Ingresa la ruta del archivo">
                </div>
                <div class="mb-3">
                    <label for="activo" class="form-label">Activo</label>
                    <select class="form-select" id="activo" name="activo">
                        <option value="1">Ejemplo Activo</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="depreciacion" class="form-label">Depreciación</label>
                    <select class="form-select" id="depreciacion" name="depreciacion">
                        <option value="1">Ejemplo Depreciación</option>
                    </select>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>
    
    </div>
@endsection
@section('scripts')
    {{-- SweetAlert --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- JS --}}
    <script src="{{ asset('js/product.js') }}"></script>
@endsection