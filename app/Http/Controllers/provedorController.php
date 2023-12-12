<?php

namespace App\Http\Controllers;

use App\Models\piezas;
use App\Models\provedor;
use Illuminate\Http\Request;

class provedorController extends Controller
{
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
        $item= new provedor();
        $item->nombre = $request->nombre;
        $item->save();
        $piezas=piezas::all();
        $provedores=provedor::all();
        return view('tienda',compact('piezas','provedores'));
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function cambiar(Request $request, $id)
    {
       
        $item=provedor::find($id);
        $item->nombre = $request->nombre;
        $item->save();
        $piezas=piezas::all();
        $provedores=provedor::all();
        return view('tienda',compact('piezas','provedores'));
    }
    public function destroy($id)
    {
        $item= provedor::find($id);
        $item->delete();
        $piezas=piezas::all();
        $provedores=provedor::all();
        return view('tienda',compact('piezas','provedores'));
    }
}
