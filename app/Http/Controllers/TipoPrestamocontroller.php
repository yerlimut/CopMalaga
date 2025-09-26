<?php

namespace App\Http\Controllers;

use App\Http\Requests\tipoPrestamoRequest;
use Illuminate\Http\Request;
use App\Models\TipoPrestamo;
class TipoPrestamocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipoprestamos = TipoPrestamo::all();
        return view('TipoPrestamo.index', compact('tipoprestamos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('TipoPrestamo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(tipoPrestamoRequest $request)
    {
    
        TipoPrestamo::create($request->all());
        return redirect()->route('tipoprestamo.index')->with('success', 'Tipo de préstamo creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $tipoprestamo = TipoPrestamo::findOrFail($id);
        return view('TipoPrestamo.edit', compact('tipoprestamo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(tipoPrestamoRequest $request,  $id)
    {
        $tipoprestamo = TipoPrestamo::findOrFail($id);
        $tipoprestamo->update($request->all());
        return redirect()->route('tipoprestamo.index')->with('success', 'Tipo de préstamo actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $tipoprestamo = TipoPrestamo::findOrFail($id);
        $tipoprestamo->delete();
        return redirect()->route('tipoprestamo.index')->with('success', 'Tipo de préstamo eliminado exitosamente.');
    }
}
