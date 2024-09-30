@extends('layouts.app')  

@section('title', 'inicio')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center">Pantalla de Inicio</h1>
        <p class="text-center">Bienvenido a la aplicación de gestión de activos. Aquí puedes ver un resumen de todas las tablas disponibles.</p>
        <hr>

        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Tabla</th>
                        <th>Descripción</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Categorías</td>
                        <td>Gestión de las diferentes categorías de activos.</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="/categorias/show">Ver</a>
                            <a class="btn btn-success btn-sm" href="/categorias/create">Agregar</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Activos</td>
                        <td>Gestión de los activos de la empresa.</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="/activos/show">Ver</a>
                            <a class="btn btn-success btn-sm" href="/activos/create">Agregar</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Depreciación</td>
                        <td>Gestión de la depreciación de los activos.</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="/depreciacion/show">Ver</a>
                            <a class="btn btn-success btn-sm" href="/depreciacion/create">Agregar</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Informes</td>
                        <td>Gestión de los informes generados.</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="/informes/show">Ver</a>
                            <a class="btn btn-success btn-sm" href="/informes/create">Agregar</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
