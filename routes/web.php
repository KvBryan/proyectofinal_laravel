<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\DepreciacionController;
use App\Http\Controllers\ActivoController;


Route::get('/home', function () {
    return view('home');
})->middleware('auth');
/*
//categorias
Route::get('/categorias/create', function () {
    return view('categorias.create');
});
Route::get('/categorias/show', function () {
    return view('categorias.show');
});

Route::get('/categorias/update', function () {
    return view('categorias.update');
});

//activos
Route::get('/activos/create', function () {
    return view('activos.create');
});

Route::get('/activos/show', function () {
    return view('activos.show');
});

Route::get('/activos/update', function () {
    return view('activos.update');
});

//depreciacion
Route::get('/depreciacion/create', function () {
    return view('depreciacion.create');
});

Route::get('/depreciacion/show', function () {
    return view('depreciacion.show');
});

Route::get('/depreciacion/update', function () {
    return view('depreciacion.update');
});

//informes
Route::get('/informes/create', function () {
    return view('informes.create');
});

Route::get('/informes/show', function () {
    return view('informes.show');
});

Route::get('/informes/update', function () {
    return view('informes.update');
}); */


Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//categorias
// Ruta para mostrar la vista show.blade.php  
Route::get('categorias/show', [CategoriaController::class, 'index']);   
// Ruta para mostrar la vista create.blade.php  
Route::get('categorias/create', [CategoriaController::class, 'create']);
// Ruta para mostrar la vista update.blade.php  
Route::get('categorias/edit/{categorias}', [CategoriaController::class, 'edit']);   
// Ruta para insertar producto  
Route::post('categorias/store', [CategoriaController::class, 'store']);   
// Ruta para modificar producto  
Route::put('categorias/update/{categorias}', [CategoriaController::class, 'update']); 
// Ruta para eliminar producto  
Route::delete('categorias/destroy/{id}', [CategoriaController::class, 'destroy']); 

//Depreciacion
// Ruta para mostrar la vista show.blade.php  
Route::get('depreciacion/show', [DepreciacionController::class, 'index']);   
// Ruta para mostrar la vista create.blade.php  
Route::get('depreciacion/create', [DepreciacionController::class, 'create']);
// Ruta para mostrar la vista update.blade.php  
Route::get('depreciacion/edit/{depreciacion}', [DepreciacionController::class, 'edit']);   
// Ruta para insertar producto  
Route::post('depreciacion/store', [DepreciacionController::class, 'store']);   
// Ruta para modificar producto  
Route::put('depreciacion/update/{depreciacion}', [DepreciacionController::class, 'update']); 
// Ruta para eliminar producto  
Route::delete('depreciacion/destroy/{id}', [DepreciacionController::class, 'destroy']); 

//Activos
// Ruta para mostrar la vista show.blade.php  
Route::get('activos/show', [ActivoController::class, 'index']);   
// Ruta para mostrar la vista create.blade.php  
Route::get('activos/create', [ActivoController::class, 'create']);
// Ruta para mostrar la vista update.blade.php  
Route::get('activos/edit/{activos}', [ActivoController::class, 'edit']);   
// Ruta para insertar producto  
Route::post('activos/store', [ActivoController::class, 'store']);   
// Ruta para modificar producto  
Route::put('activos/update/{activos}', [ActivoController::class, 'update']); 
// Ruta para eliminar producto  
Route::delete('activos/destroy/{id}', [ActivoController::class, 'destroy']); 