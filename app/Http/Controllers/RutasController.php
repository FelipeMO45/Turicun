<?php

namespace App\Http\Controllers;

use App\Models\rutas;
use Illuminate\Http\Request;

class RutasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function rutas()
    {
        return view('modulos.rutas');
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
    public function show(rutas $rutas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(rutas $rutas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, rutas $rutas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(rutas $rutas)
    {
        //
    }
}
