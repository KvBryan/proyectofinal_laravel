{{-- Heredamos la estructura del archivo app.blade.php --}} 
@extends('layouts.app')  
{{-- Definimos el título --}}  
@section('title', 'Activos') 
{{-- Definimos el contenido --}} 
@section('content')  
    <h1>Crear Activo</h1>
    <div class="container mt-5">
        <form action="/activos/store" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre del Activo</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa el nombre del activo">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" placeholder="Ingresa la descripción del activo"></textarea>
            </div>
            <div class="form-group">
                <label for="valor_inicial">Valor Inicial</label>
                <input type="number" step="0.01" class="form-control" id="valor_inicial" name="valor_inicial" placeholder="Ingresa el valor inicial del activo">
            </div>
            <div class="form-group">
                <label for="fecha_adquisicion">Fecha de Adquisición</label>
                <input type="date" class="form-control" id="fecha_adquisicion" name="fecha_adquisicion">
            </div>
            <div class="form-group">
                <label for="categoria">Categoría</label>
                <select class="form-control" id="categoria" name="categoria">
                    <!-- Aquí puedes agregar opciones dinámicamente -->
                </select>
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