<?php

namespace App\Http\Controllers;

use App\Models\conductores;
use Illuminate\Http\Request;

class ConductoresController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function conductores()
    {
        return view('modulos.conductores');
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
    public function show(conductores $conductores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(conductores $conductores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, conductores $conductores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(conductores $conductores)
    {
        //
    }
}
