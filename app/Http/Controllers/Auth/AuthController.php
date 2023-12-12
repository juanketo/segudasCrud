<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\piezas;
use App\Models\provedor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function home(){

        return view("home");
    }

    public function tienda(){
        $piezas=piezas::all();
        // $piezas2=piezas::select('id, nombre, marca, provedores')
        // ->join('provedor');
        $provedores = provedor::all();
        return view('tienda',compact('piezas','provedores'));
    }
    public function agregar(){
        $provedores = provedor::all();
        return view("agregar", compact('provedores'));
    }
    public function provedor(){
        return view("provedor");
    }
    
    public function actualizar($id){
        $item=piezas::find($id);
        $provedores = provedor::all();
        return view('actualizar',compact('item', 'provedores'));
    }
    public function eliminar($id){
        $item=piezas::find($id);
        return view('eliminar',compact('item'));
    }
    public function actualizarp($id){
        $item=provedor::find($id);
        return view('actualizarpro',compact('item'));
    }
    public function eliminarp($id){
        $item=provedor::find($id);
        return view('eliminarpro',compact('item'));
    }
}
