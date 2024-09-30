{{-- Heredamos la estructura del archivo app.blade.php --}} 
@extends('layouts.app')  
{{-- Definimos el título --}}  
@section('title', 'Activos') 
{{-- Definimos el contenido --}} 
@section('content')
    <h1>Activos</h1>
    <h5>Listado de activos</h5>
    <hr>
    {{-- Botón para ir al formulario de agregar activo --}}
    <a class="btn btn-danger btn-sm" href="/activos/create">Agregar nuevo activo</a>
    <table class="table table-hover table-bordered mt-2">
        <tr>
            <td>ID Activo</td>
            <td>Nombre</td>
            <td>Descripción</td>
            <td>Valor Inicial</td>
            <td>Fecha de Adquisición</td>
            <td>ID Categoría</td>
            <td>Acciones</td>
        </tr>
        {{-- Listado de activos --}}
        <tr>
            <td>1</td>
            <td>Ejemplo Activo</td>
            <td>Descripción de ejemplo</td>
            <td>1000.00</td>
            <td>2024-01-01</td>
            <td>1</td>
            <td>
                <a class="btn btn-success btn-sm" href="/activos/update">Modificar</a>
                <button class="btn btn-danger btn-sm" url="/activos/#" onclick="destroy(this)" token="{{ csrf_token() }}">Eliminar</button>
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