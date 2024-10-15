<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Categoria;

;

class CategoriaController extends Controller
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
        // Listar todas las categorías
        $categorias = Categoria::select(
            "categorias.id_categoria", 
            "categorias.nombre_categoria", 
            "categorias.descripcion_categoria"
        )->get();

        // Mostrar vista show.blade.php junto al listado de categorías
        return view('categorias/show')->with(['categorias' => $categorias]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Mostrar vista create.blade.php
        return view('categorias/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar campos
        $data = $request->validate([
            'nombre_categoria' => 'required|alpha',
            'descripcion_categoria' => 'required|alpha',
        ]);

        // Enviar insert
        Categoria::create($data);

        // Redireccionar
        return redirect('categorias/show');
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
    public function edit(Categoria $categorias)
    {
        // Mostrar vista update.blade.php junto con la categoría específica
        return view('categorias/update')->with(['categoria' => $categorias]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categoria $categorias)
    {
        // Validar campos
        $data = $request->validate([
            'nombre_categoria' => 'required|alpha',
            'descripcion_categoria' => 'required|alpha',
        ]);

        // Reemplazar datos anteriores por los nuevos 
        $categorias->nombre_categoria = $data['nombre_categoria'];  
        $categorias->descripcion_categoria = $data['descripcion_categoria'];  
        $categorias->updated_at = now();
        // Enviar a guardar la actualización
        $categorias->save(); 
        // Redireccionar
        return redirect('categorias/show');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Eliminar la categoría con el id recibido
        Categoria::destroy($id);

        // Retornar una respuesta json
        return response()->json(['res' => true]);
    }
    
}