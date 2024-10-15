{{-- Heredamos la estructura del archivo app.blade.php --}} 
@extends('layouts.app')  
{{-- Definimos el título --}}  
@section('title', 'Activos') 
{{-- Definimos el contenido --}} 
@section('content')  
    
    
<div class="container mt-5">
        <h1 class="text-center text-primary mb-4">Actualizar Activo</h1>
        <div class="card mx-auto shadow p-4" style="max-width: 600px;">
            <form action="/activos/update/{{$activo->id_activo}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre del Activo</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{$activo->nombre}}" placeholder="Ingresa el nombre del activo">
                    @error('nombre')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" rows="4" placeholder="Ingresa la descripción del activo">{{$activo->descripcion}}</textarea>
                    @error('descripcion')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="valor_inicial" class="form-label">Valor Inicial</label>
                    <input type="number" step="0.01" class="form-control" id="valor_inicial" name="valor_inicial" value="{{$activo->valor_inicial}}" placeholder="Ingresa el valor inicial del activo">
                    @error('valor_inicial')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="fecha_adquisicion" class="form-label">Fecha de Adquisición</label>
                    <input type="date" class="form-control" id="fecha_adquisicion" name="fecha_adquisicion" value="{{$activo->fecha_adquisicion}}">
                    @error('fecha_adquisicion')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="categoria" class="form-label">Categoría</label>
                    <select class="form-select" id="categoria" name="categoria">
                        @foreach ($categorias as $item)
                            <option value="{{$item->id_categoria}}" {{(($item->id_categoria==$activo->categoria)?'selected':'')}}>{{$item->nombre_categoria}}</option>
                        @endforeach
                    </select>
                    @error('categoria')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Guardar</button>
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