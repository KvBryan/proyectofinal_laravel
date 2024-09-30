{{-- Heredamos la estructura del archivo app.blade.php --}} 
@extends('layouts.app')  
{{-- Definimos el título --}}  
@section('title', 'Depreciacion') 
{{-- Definimos el contenido --}} 
@section('content')  
@section('content')
    <h1>Depreciación</h1>
    <h5>Listado de depreciaciones</h5>
    <hr>
    {{-- Botón para ir al formulario de agregar depreciación --}}
    <a class="btn btn-danger btn-sm" href="/depreciacion/create">Agregar nueva depreciación</a>
    <table class="table table-hover table-bordered mt-2">
        <tr>
            <td>ID Depreciación</td>
            <td>ID Activo</td>
            <td>Fecha de Depreciación</td>
            <td>Valor Depreciado</td>
            <td>Valor Residual</td>
            <td>Acciones</td>
        </tr>
        {{-- Listado de depreciaciones --}}
        <tr>
            <td>1</td>
            <td>1</td>
            <td>2024-01-01</td>
            <td>100.00</td>
            <td>900.00</td>
            <td>
                <a class="btn btn-success btn-sm" href="/depreciacion/update">Modificar</a>
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