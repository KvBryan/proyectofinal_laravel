{{-- Heredamos la estructura del archivo app.blade.php --}} 
@extends('layouts.app')  
{{-- Definimos el título --}}  
@section('title', 'Depreciacion') 
{{-- Definimos el contenido --}} 
@section('content')  
    <div class="container mt-5">
            <h1 class="text-center text-primary mb-4">Crear Depreciación</h1>
            <div class="card mx-auto shadow p-4" style="max-width: 600px;">
                <form action="/depreciacion/store" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="activo" class="form-label">Activo</label>
                        <select class="form-select" id="activo" name="activo">
                            @foreach ($activos as $item)  
                            <option value="{{$item->id_activo}}">{{$item->nombre}}</option> 
                            @endforeach  
                        </select>
                        @error('activo')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="fecha_depreciacion" class="form-label">Fecha de Depreciación</label>
                        <input type="date" class="form-control" id="fecha_depreciacion" name="fecha_depreciacion">
                        @error('fecha_depreciacion')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="valor_depreciado" class="form-label">Valor Depreciado</label>
                        <input type="number" step="0.01" class="form-control" id="valor_depreciado" name="valor_depreciado" placeholder="Ingresa el valor depreciado">
                        @error('valor_depreciado')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="valor_residual" class="form-label">Valor Residual</label>
                        <input type="number" step="0.01" class="form-control" id="valor_residual" name="valor_residual" placeholder="Ingresa el valor residual">
                        @error('valor_residual')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
    </div>
@endsection
@section('scripts')
    {{-- SweetAlert --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- JS --}}
    <script src="{{ asset('js/product.js') }}"></script>
@endsection