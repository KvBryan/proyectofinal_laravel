{{-- Heredamos la estructura del archivo app.blade.php --}} 
@extends('layouts.app')  
{{-- Definimos el título --}}  
@section('title', 'Depreciacion') 
{{-- Definimos el contenido --}} 
@section('content')  
@section('content')
    
<div class="container mt-5">
        <h1 class="text-center text-primary mb-4">Depreciaciones</h1>
        <h5 class="text-secondary text-center mb-4">Listado de depreciaciones</h5>
        <hr>
        <div class="text-end mb-3">
            <a class="btn btn-danger btn-sm" href="/depreciacion/create">Agregar nueva depreciación</a>
        </div>
            <table class="table table-hover table-bordered mt-2">
                <thead class="table-dark">
                    <tr>
                        <th>ID Depreciación</th>
                        <th>ID Activo</th>
                        <th>Fecha de Depreciación</th>
                        <th>Valor Depreciado</th>
                        <th>Valor Residual</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($depreciacion as $item)
                        <tr>
                            <td>{{ $item->id_depreciacion }}</td>
                            <td>{{ $item->activo }}</td>
                            <td>{{ $item->fecha_depreciacion }}</td>
                            <td>{{ $item->valor_depreciado }}</td>
                            <td>{{ $item->valor_residual }}</td>
                            <td>
                                <a class="btn btn-success btn-sm me-1" href="/depreciacion/edit/{{ $item->id_depreciacion }}">Modificar</a>
                                <button class="btn btn-danger btn-sm" url="/depreciacion/destroy/{{ $item->id_depreciacion }}" onclick="destroy(this)" token="{{ csrf_token() }}">Eliminar</button>
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
    <script src="{{ asset('js/depreciacion.js') }}"></script>
@endsection