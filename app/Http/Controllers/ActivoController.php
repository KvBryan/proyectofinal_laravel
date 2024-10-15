<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activo;
use App\Models\Categoria;

class ActivoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        // Listar todos los activos
        $activos = Activo::select(
            'activos.id_activo',
            'activos.nombre',
            'activos.descripcion',
            'activos.valor_inicial',
            'activos.fecha_adquisicion',
            'activos.categoria'
        )
        ->join("categorias", "categorias.id_categoria", "=", "activos.categoria")
        ->get();

        // Mostrar vista show.blade.php junto al listado de activos
        return view('activos/show')->with(['activos' => $activos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Listar categorías para llenar select
        $categorias = Categoria::all();

        // Mostrar vista create.blade.php
        return view('activos/create')->with(['categorias' => $categorias]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar campos
        $data = $request->validate([
            'nombre' => 'required|alpha',
            'descripcion' => 'required|alpha',
            'valor_inicial' => 'required|numeric',
            'fecha_adquisicion' => 'required',
            'categoria' => 'required',
        ]);

        // Enviar insert
        Activo::create($data);

        // Redireccionar
        return redirect('activos/show');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Activo $activos)
    {
        // Listar categorías para llenar select
        $categorias = Categoria::all();

        // Mostrar vista update.blade.php junto con el activo específico
        return view('activos/update')->with(['activo' => $activos, 'categorias' => $categorias]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Activo $activos)
    {
        // Validar campos
        $data = $request->validate([
            'nombre' => 'required|alpha',
            'descripcion' => 'required|alpha',
            'valor_inicial' => 'required|numeric',
            'fecha_adquisicion' => 'required',
            'categoria' => 'required',
        ]);

        // Reemplazar datos anteriores por los nuevos
        $activos->nombre = $data['nombre'];
        $activos->descripcion = $data['descripcion'];
        $activos->valor_inicial = $data['valor_inicial'];
        $activos->fecha_adquisicion = $data['fecha_adquisicion'];
        $activos->categoria = $data['categoria'];
        $activos->updated_at = now();

        // Enviar a guardar la actualización
        $activos->save();

        // Redireccionar
        return redirect('activos/show');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Eliminar el activo con el id recibido
        Activo::destroy($id);

        // Retornar una respuesta json
        return response()->json(['res' => true]);
    }
}
