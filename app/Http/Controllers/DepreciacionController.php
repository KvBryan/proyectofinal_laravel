<?php

namespace App\Http\Controllers;

use App\Models\Depreciacion;
use Illuminate\Http\Request;
use App\Models\Activo;


class DepreciacionController extends Controller
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
        // Listar todas las depreciaciones
        $depreciacion = Depreciacion::select(
            'depreciacion.id_depreciacion',
            'depreciacion.activo',
            'depreciacion.fecha_depreciacion',
            'depreciacion.valor_depreciado',
            'depreciacion.valor_residual'
        )->join("activos", "activos.id_activo", "=", "depreciacion.activo")
        ->get();

        // Mostrar vista show.blade.php junto al listado de depreciaciones
        return view('depreciacion/show')->with(['depreciacion' => $depreciacion]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Listar categorias para llenar select 
        $activos = Activo::all();  
        // Mostrar vista create.blade.php
        return view('depreciacion/create')->with(['activos'=>$activos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar campos
        $data = request()->validate([
            'activo' => 'required',
            'fecha_depreciacion' => 'required',
            'valor_depreciado' => 'required|numeric',
            'valor_residual' => 'required|numeric',
        ]);

        // Enviar insert
        Depreciacion::create($data);

        // Redireccionar
        return redirect('depreciacion/show');
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
    public function edit(Depreciacion $depreciacion)
    {
        // Listar categorias para llenar select 
        $activos = Activo::all();  
        // Mostrar vista update.blade.php junto con la depreciación específica
        return view('depreciacion/update')->with(['depreciacion' => $depreciacion, 'activos' => $activos]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Depreciacion $depreciacion)
    {
        // Validar campos
        $data = request()->validate([
            'activo' => 'required',
            'fecha_depreciacion' => 'required',
            'valor_depreciado' => 'required|numeric',
            'valor_residual' => 'required|numeric',
        ]);

        // Reemplazar datos anteriores por los nuevos 
        $depreciacion->activo = $data['activo'];  
        $depreciacion->fecha_depreciacion = $data['fecha_depreciacion'];  
        $depreciacion->valor_depreciado = $data['valor_depreciado'];  
        $depreciacion->valor_residual = $data['valor_residual'];  
        $depreciacion->updated_at = now();
        // Enviar a guardar la actualización
        $depreciacion->save(); 
        // Redireccionar
        return redirect('depreciacion/show');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Eliminar la depreciación con el id recibido
        Depreciacion::destroy($id);

        // Retornar una respuesta json
        return response()->json(['res' => true]);
    }
}
