<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Cliente;
use App\Http\Requests\ClienteFormRequest2;
use Illuminate\Support\Facades\Validator;

class ClienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('preventBackHistory');
        $this->middleware('auth');
        $this->middleware('can:clientes.index')->only('index');
        $this->middleware('can:clientes.store')->only('store');
        $this->middleware('can:clientes.update')->only('update');
        $this->middleware('can:clientes.delete')->only('delete');
    }
    public function Index()
    {
        $cliente=Cliente::where('cedula', '!=', '1111111111')->get();
        return view("clientes.index", ["clientes" => $cliente]);
    }
    public function store(Request $request)
    {
        $validator= Validator::make($request->all(), ['cedula'=>'required|min:10|max:10',
        'nombre'=>'required',]);
        if ($validator->fails()) {
            return redirect()->back()->with(['error'=>'1'])->withErrors($validator)->withInput();
        }

        $cliente= new Cliente();
        $cliente->nombre=$request->get('nombre');
        $cliente->cedula=$request->get('cedula');
        $cliente->teléfono= $request->get('telefono');
        $cliente->save();
        return redirect()->back()->with(['creacion'=> 'ok']);
    }

    public function update(Request $request, $id)
    {
        $validator= Validator::make($request->all(), ['cedula'=>'required|min:10|max:10',
        'nombre'=>'required',]);
        if ($validator->fails()) {
            return redirect()->back()->with(['error'=>'0','ids'=>$id])->withErrors($validator)->withInput();
        }
        $cliente= Cliente::findOrFail($id);
        $cliente->nombre=$request->get('nombre');
        $cliente->cedula=$request->get('cedula');
        $cliente->teléfono= $request->get('telefono');
        $cliente->update();
        return redirect()->back()->with(['actualizacion'=>'ok']);
    }

    public function delete($id)
    {
        $cliente= Cliente::findOrFail($id);
        $cliente->delete();
        return redirect()->back()->with('eliminacion', 'ok');
    }
}
