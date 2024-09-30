{{-- Heredamos la estructura del archivo app.blade.php --}} 
@extends('layouts.app')  
{{-- Definimos el título --}}  
@section('title', 'Informes') 
{{-- Definimos el contenido --}} 
@section('content')  
    <h1>Crear Informe</h1>
    <div class="container mt-5">
        <form action="/informes/store" method="POST">
            @csrf
            <div class="form-group">
                <label for="tipo_informe">Tipo de Informe</label>
                <input type="text" class="form-control" id="tipo_informe" name="tipo_informe" placeholder="Ingresa el tipo de informe">
            </div>
            <div class="form-group">
                <label for="fecha_generacion">Fecha de Generación</label>
                <input type="date" class="form-control" id="fecha_generacion" name="fecha_generacion">
            </div>
            <div class="form-group">
                <label for="ruta_archivo">Ruta del Archivo</label>
                <input type="text" class="form-control" id="ruta_archivo" name="ruta_archivo" placeholder="Ingresa la ruta del archivo">
            </div>
            <div class="form-group">
                <label for="activo">Activo</label>
                <select class="form-control" id="activo" name="activo">
                    <!-- Aquí puedes agregar opciones dinámicamente -->
                </select>
            </div>
            <div class="form-group">
                <label for="depreciacion">Depreciación</label>
                <select class="form-control" id="depreciacion" name="depreciacion">
                    <!-- Aquí puedes agregar opciones dinámicamente -->
                </select>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>
@endsection
@section('scripts')
    {{-- SweetAlert --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- JS --}}
    <script src="{{ asset('js/product.js') }}"></script>
@endsection