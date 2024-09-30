<?php

namespace App\Http\Controllers;

use App\Models\Informe;
use Illuminate\Http\Request;

class InformeController extends Controller
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
    public function show(Informe $informes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Informe $informes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Informe $informes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Informe $informes)
    {
        //
    }
}
