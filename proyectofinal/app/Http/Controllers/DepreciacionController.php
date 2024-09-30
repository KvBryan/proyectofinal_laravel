<?php

namespace App\Http\Controllers;

use App\Models\Depreciacion;
use Illuminate\Http\Request;

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
    public function show(Depreciacion $depreciacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Depreciacion $depreciacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Depreciacion $depreciacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Depreciacion $depreciacion)
    {
        //
    }
}
