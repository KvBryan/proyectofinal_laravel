<?php

namespace App\Http\Controllers;

use App\Models\Activo;
use Illuminate\Http\Request;

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
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Activo $activos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Activo $activos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Activo $activos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Activo $activos)
    {
        //
    }
}
