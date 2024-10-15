{{-- Heredamos la estructura del archivo app.blade.php --}} 
@extends('layouts.app')  
{{-- Definimos el título --}}  
@section('title', 'Categoria') 
{{-- Definimos el contenido --}} 
@section('content')

<div class="container mt-5">
        <h1 class="text-center text-primary mb-4">Categorías</h1>
        <h5 class="text-secondary text-center mb-4">Listado de categorías</h5>
        <hr>
        <div class="d-flex justify-content-end mb-3">
            <a class="btn btn-danger btn-sm me-2" href="/categorias/create">Agregar nuevo producto</a>
        </div>
        <table class="table table-striped table-hover mt-2">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categorias as $item)
                    <tr>
                        <td>{{ $item->id_categoria }}</td>
                        <td>{{ $item->nombre_categoria }}</td>
                        <td>{{ $item->descripcion_categoria }}</td>
                        <td>
                            <a class="btn btn-success btn-sm me-1" href="/categorias/edit/{{ $item->id_categoria }}">Modificar</a>
                            <button class="btn btn-danger btn-sm" url="/categorias/destroy/{{ $item->id_categoria }}" onclick="destroy(this)" token="{{ csrf_token() }}">Eliminar</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</div>
    
@endsection
@section('scripts')
    {{-- SweetAlert --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- JS --}}
    <script src="{{ asset('js/categorias.js') }}"></script>
@endsection