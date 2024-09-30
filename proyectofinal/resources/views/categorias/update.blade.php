{{-- Heredamos la estructura del archivo app.blade.php --}} 
@extends('layouts.app')  
{{-- Definimos el título --}}  
@section('title', 'Categoria') 
{{-- Definimos el contenido --}} 
@section('content')  
    <h1>Actualizar Categoría</h1>
    <div class="container mt-5">
        <form action="/categorias/update/1" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombre_categoria">Nombre de Categoría</label>
                <input type="text" class="form-control" id="nombre_categoria" name="nombre_categoria" value="Ejemplo Categoría" placeholder="Ingresa el nombre de la categoría">
            </div>
            <div class="form-group">
                <label for="descripcion_categoria">Descripción de Categoría</label>
                <textarea class="form-control" id="descripcion_categoria" name="descripcion_categoria" placeholder="Ingresa la descripción de la categoría">Descripción de ejemplo</textarea>
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