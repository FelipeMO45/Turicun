<?php

namespace App\Http\Controllers;

use App\Models\vehiculos;
use Illuminate\Http\Request;

class VehiculosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function vehiculos()
    {
        return view('modulos.vehiculos');
    }
    /**
     * Display a listing of the resource.
     */
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
    public function show(vehiculos $vehiculos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(vehiculos $vehiculos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, vehiculos $vehiculos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(vehiculos $vehiculos)
    {
        //
    }
}
