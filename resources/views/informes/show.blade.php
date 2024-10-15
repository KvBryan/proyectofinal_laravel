{{-- Heredamos la estructura del archivo app.blade.php --}} 
@extends('layouts.app')  
{{-- Definimos el título --}}  
@section('title', 'Informes') 
{{-- Definimos el contenido --}} 
@section('content')  
    <div class="container mt-5">
        <h1 class="text-center text-primary mb-4">Informes</h1>
        <h5 class="text-secondary text-center mb-4">Listado de informes</h5>
        <hr>
        <div class="text-end mb-3">
            <a class="btn btn-danger btn-sm" href="/informes/create">Agregar nuevo informe</a>
        </div>
        <table class="table table-hover table-bordered mt-2">
            <thead class="table-dark">
                <tr>
                    <th>ID Informe</th>
                    <th>Tipo de Informe</th>
                    <th>Fecha de Generación</th>
                    <th>Ruta del Archivo</th>
                    <th>ID Activo</th>
                    <th>ID Depreciación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Ejemplo Informe</td>
                    <td>2024-01-01</td>
                    <td>/ruta/archivo.pdf</td>
                    <td>1</td>
                    <td>1</td>
                    <td>
                        <a class="btn btn-success btn-sm" href="/informes/update">Modificar</a>
                        <button class="btn btn-danger btn-sm" url="#" onclick="destroy(this)" token="{{ csrf_token() }}">Eliminar</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
@section('scripts')
    {{-- SweetAlert --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- JS --}}
    <script src="{{ asset('js/product.js') }}"></script>
@endsection