<?php

namespace App\Http\Controllers;

use App\Models\clientes;
use Illuminate\Http\Request;

class clientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Cambio prueba pull request
        $clientes = clientes::all();
        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        clientes::create($request->all());
        return redirect()->route('clientes.index')-> with('success','cliente creado exitosamente');
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
        $cliente = clientes::findorFail($id);
        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $cliente = clientes::findorFail($id);
        $cliente->update($request->all());
        return redirect()->route('clientes.index')->with('success', 'cliente actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $cliente = clientes::findorFail($id);
        $cliente->delete();
        return redirect()->route('clientes.index')->with('success', 'cliente eliminado correctamente');
    }
}

