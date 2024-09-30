{{-- Heredamos la estructura del archivo app.blade.php --}} 
@extends('layouts.app')  
{{-- Definimos el título --}}  
@section('title', 'Depreciacion') 
{{-- Definimos el contenido --}} 
@section('content')  
    <h1>Actualizar Depreciacion</h1>
    <div class="container mt-5">
        <form>
            <div class="form-group">
                <label for="nombre">Actualizar Depreciacion</label>
                <input type="text" class="form-control" id="nombre" placeholder="Ingresa tu nombre">
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