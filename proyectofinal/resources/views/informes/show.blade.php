{{-- Heredamos la estructura del archivo app.blade.php --}} 
@extends('layouts.app')  
{{-- Definimos el título --}}  
@section('title', 'Informes') 
{{-- Definimos el contenido --}} 
@section('content')  
    <h1>Informes</h1>
    <h5>Listado de informes</h5>
    <hr>
    {{-- Botón para ir al formulario de agregar informe --}}
    <a class="btn btn-danger btn-sm" href="/informes/create">Agregar nuevo informe</a>
    <table class="table table-hover table-bordered mt-2">
        <tr>
            <td>ID Informe</td>
            <td>Tipo de Informe</td>
            <td>Fecha de Generación</td>
            <td>Ruta del Archivo</td>
            <td>ID Activo</td>
            <td>ID Depreciación</td>
            <td>Acciones</td>
        </tr>
        {{-- Listado de informes --}}
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
    </table>
@endsection
@section('scripts')
    {{-- SweetAlert --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- JS --}}
    <script src="{{ asset('js/product.js') }}"></script>
@endsection