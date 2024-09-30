{{-- Heredamos la estructura del archivo app.blade.php --}} 
@extends('layouts.app')  
{{-- Definimos el título --}}  
@section('title', 'Depreciacion') 
{{-- Definimos el contenido --}} 
@section('content')  
    <h1>Actualizar Depreciación</h1>
    <div class="container mt-5">
        <form action="/depreciacion/update/1" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="activo">Activo</label>
                <select class="form-control" id="activo" name="activo">
                    <option value="1">Ejemplo Activo</option>
                </select>
            </div>
            <div class="form-group">
                <label for="fecha_depreciacion">Fecha de Depreciación</label>
                <input type="date" class="form-control" id="fecha_depreciacion" name="fecha_depreciacion" value="2024-01-01">
            </div>
            <div class="form-group">
                <label for="valor_depreciado">Valor Depreciado</label>
                <input type="number" step="0.01" class="form-control" id="valor_depreciado" name="valor_depreciado" value="100.00" placeholder="Ingresa el valor depreciado">
            </div>
            <div class="form-group">
                <label for="valor_residual">Valor Residual</label>
                <input type="number" step="0.01" class="form-control" id="valor_residual" name="valor_residual" value="900.00" placeholder="Ingresa el valor residual">
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