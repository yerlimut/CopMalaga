<?php

namespace App\Http\Controllers;

use App\Http\Requests\EstadoPrestamoRequest;
use Illuminate\Http\Request;
use App\Models\EstadoPrestamo;

class EstadoPrestamoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $estadoPrestamo = EstadoPrestamo::all();
        return view('EstadoPrestamo.index', compact('estadoPrestamo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('EstadoPrestamo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EstadoPrestamoRequest $request)
    {
        //
        EstadoPrestamo::create($request->all());
        return redirect()->route('estadoprestamo.index')-> with('success','estado prestamo creado exitosamente');
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
    public function edit($id)
    {
        //
        $estadoPrestamo = EstadoPrestamo::findOrFail($id);
        return view('estadoprestamo.edit', compact('estadoPrestamo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EstadoPrestamoRequest $request, string $id)
    {
        //
        $estadoPrestamo = EstadoPrestamo::findOrFail($id);
        $estadoPrestamo->update($request->all());
        return redirect()->route('estadoprestamo.index')-> with('success','estado prestamo actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $estadoPrestamo = EstadoPrestamo::findOrFail($id);
        $estadoPrestamo->delete();
        return redirect()->route('estadoprestamo.index')-> with('success','estado prestamo eliminado exitosamente');
    }
}
