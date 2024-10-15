{{-- Heredamos la estructura del archivo app.blade.php --}} 
@extends('layouts.app')  
{{-- Definimos el título --}}  
@section('title', 'Activos') 
{{-- Definimos el contenido --}} 
@section('content')
    
<div class="container mt-5">
        <h1 class="text-center text-primary mb-4">Activos</h1>
        <h5 class="text-secondary text-center mb-4">Listado de activos</h5>
        <hr>
        <div class="d-flex justify-content-end mb-3">
            <a class="btn btn-danger btn-sm me-2" href="/activos/create">Agregar nuevo activo</a>
        </div>
            <table class="table table-hover table-bordered mt-2">
                <thead class="table-dark">
                    <tr>
                        <th>ID Activo</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Valor Inicial</th>
                        <th>Fecha de Adquisición</th>
                        <th>Categoría</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($activos as $item)
                        <tr>
                            <td>{{ $item->id_activo }}</td>
                            <td>{{ $item->nombre }}</td>
                            <td>{{ $item->descripcion }}</td>
                            <td>{{ $item->valor_inicial }}</td>
                            <td>{{ $item->fecha_adquisicion }}</td>
                            <td>{{ $item->categoria }}</td>
                            <td>
                                <a class="btn btn-success btn-sm me-1" href="/activos/edit/{{ $item->id_activo }}">Modificar</a>
                                <button class="btn btn-danger btn-sm" url="/activos/destroy/{{ $item->id_activo }}" onclick="destroy(this)" token="{{ csrf_token() }}">Eliminar</button>
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
    <script src="{{ asset('js/activos.js') }}"></script>
@endsection