{{-- Heredamos la estructura del archivo app.blade.php --}} 
@extends('layouts.app')  
{{-- Definimos el título --}}  
@section('title', 'Categoria') 
{{-- Definimos el contenido --}} 
@section('content')
    <h1>Categorías</h1>
    <h5>Listado de categorías</h5>
    <hr>
    {{-- Botón para ir al formulario de agregar categoría --}}
    <a class="btn btn-danger btn-sm" href="/categorias/create">Agregar nueva categoría</a>
    <table class="table table-hover table-bordered mt-2">
        <tr>
            <td>ID Categoría</td>
            <td>Nombre de Categoría</td>
            <td>Descripción de Categoría</td>
            <td>Acciones</td>
        </tr>
        {{-- Listado de categorías --}}
        <tr>
            <td>1</td>
            <td>Ejemplo Categoría</td>
            <td>Descripción de ejemplo</td>
            <td>
                <a class="btn btn-success btn-sm" href="/categorias/update/">Modificar</a>
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