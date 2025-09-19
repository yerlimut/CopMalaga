<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MedioPago;

class MedioPagoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mediosPago = MedioPago::all();
        return view('MediosPago.index', compact('mediosPago'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('MediosPago.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        MedioPago::create($request->all());
        return redirect()->route('mediospago.index');

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
        $medioPago = MedioPago::findOrFail($id);
        return view('mediospago.edit', compact('medioPago'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $medioPago = MedioPago::findOrFail($id);
        $medioPago->update($request->all());
        return redirect()->route('mediospago.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $medioPago = MedioPago::findOrFail($id);
        $medioPago->delete();
        return redirect()->route('mediospago.index');
    }
}
