{{-- Heredamos la estructura del archivo app.blade.php --}} 
@extends('layouts.app')  
{{-- Definimos el título --}}  
@section('title', 'Usuarios') 
{{-- Definimos el contenido --}} 
@section('content')  
    <h1>Mostrar Usuarios</h1>
    <div class="container mt-5">
        <h2>Lista de Usuarios</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre de Usuario</th>
                </tr>
            </thead>
            <tbody>
                <td>NO HAY REGISTROS</td>
                <!-- Aquí puedes agregar filas con datos -->
            </tbody>
        </table>
    </div>
@endsection
@section('scripts')
    {{-- SweetAlert --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- JS --}}
    <script src="{{ asset('js/product.js') }}"></script>
@endsection