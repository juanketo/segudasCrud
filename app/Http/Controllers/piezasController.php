<?php

namespace App\Http\Controllers;

use App\Models\piezas;
use App\Models\provedor;
use Illuminate\Http\Request;

class piezasController extends Controller
{
   
    public function index()
    {
        

    }

    public function create()
    {
       
    }

    public function show(string $id)
    {
       
    }

    public function edit(string $id)
    {
      
    }

    public function cambiar(Request $request, $id)
    {
       
        $item=piezas::find($id);
        $item->nombre = $request->nombre;
        $item->marca = $request->marca;
        $item->provedor = $request->provedor;
        $item->save();
        $piezas=piezas::all();
        $provedores=provedor::all();
        return view('tienda',compact('piezas','provedores'));
    }

    public function store(Request $request)
    {
        $item= new piezas();
        $item->nombre = $request->nombre;
        $item->marca = $request->marca;
        $item->provedor = $request->provedor;
        $item->save();
        $piezas=piezas::all();
        $provedores=provedor::all();
        return view('tienda',compact('piezas','provedores'));
    }
    public function destroy($id)
    {
        $item= piezas::find($id);
        $item->delete();
        $piezas=piezas::all();
        $provedores=provedor::all();
        return view('tienda',compact('piezas','provedores'));
    }
}
