{{-- Heredamos la estructura del archivo app.blade.php --}} 
@extends('layouts.app')  
{{-- Definimos el título --}}  
@section('title', 'Categoria') 
{{-- Definimos el contenido --}} 
@section('content')  
    
    <div class="container mt-5">
            <h1 class="text-center text-primary mb-4">Crear Categoría</h1>
            <div class="card mx-auto shadow p-4" style="max-width: 600px;">
                <form action="/categorias/store" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nombre_categoria" class="form-label">Nombre de Categoría</label>
                        <input type="text" class="form-control" id="nombre_categoria" name="nombre_categoria" placeholder="Ingresa el nombre de la categoría">
                        @error('nombre_categoria')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="descripcion_categoria" class="form-label">Descripción de Categoría</label>
                        <textarea class="form-control" id="descripcion_categoria" name="descripcion_categoria" rows="4" placeholder="Ingresa la descripción de la categoría"></textarea>
                        @error('descripcion_categoria')
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