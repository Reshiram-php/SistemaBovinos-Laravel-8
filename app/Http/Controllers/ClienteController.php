<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Cliente;
use App\Http\Requests\ClienteFormRequest2;

class ClienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:clientes.index');
    }
    public function Index()
    {
        $cliente=Cliente::where('cedula', '!=', '1111111111')->get();
        return view("clientes.index", ["clientes" => $cliente]);
    }
    public function store(ClienteFormRequest2 $request)
    {
        $cliente= new Cliente();
        $cliente->nombre=$request->get('nombre');
        $cliente->cedula=$request->get('cedula');
        $cliente->teléfono= $request->get('telefono');
        $cliente->save();
        return redirect()->back();
    }

    public function update(ClienteFormRequest2 $request, $id)
    {
        $cliente= Cliente::findOrFail($id);
        $cliente->nombre=$request->get('nombre');
        $cliente->cedula=$request->get('cedula');
        $cliente->teléfono= $request->get('telefono');
        $cliente->update();
        return redirect()->back();
    }

    public function delete($id)
    {
        $cliente= Cliente::findOrFail($id);
        $cliente->delete();
        return redirect()->back();
    }
}
