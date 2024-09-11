<?php

namespace App\Http\Controllers;

use App\Models\Transacciones;
use Illuminate\Http\Request;

class TransaccionController extends Controller
{
    public function index(){
        $transacciones = Transacciones::all();
        return view('finanzas.index', compact('transacciones'));
    }

    public function store(Request $request){
        $finanzas = new Transacciones();
        $finanzas->transaccion_nombre = $request->nombre;
        $finanzas->transaccion_monto = $request->monto;
        $finanzas->transaccion_tipo = $request->tipo;
        $finanzas->transaccion_categoria = $request->categoria;
        $finanzas->save();
        return redirect()->back()->with('success','Añadido');
    }
}
