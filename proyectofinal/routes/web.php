<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
})->middleware('auth');

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
});


Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
