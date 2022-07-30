<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ListaEnfermedades;
use Illuminate\Support\Facades\Redirect;

class ListaEnfermedadesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('listadoen.index');
    }

    public function create()
    {
        return view('listadoen.create');
    }
    public function datos()
    { 
        $listado = ListaEnfermedades::get();

        return datatables()->of($listado)
            ->addColumn('pdf', function ($pdf) {
                return '<a href="' . route('listadoen.edit', $pdf->enfermedades_id) . '">
                <button class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top"
                        title="editar"><i class="ti-pencil"></i>
                    </button></a>';
            }
            )
            ->rawColumns(['pdf'])
            ->toJson();
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'enfermedades_nombre' => 'required|unique:enfermedades,enfermedades_nombre',
        ]);
        $enfermedades = new ListaEnfermedades;
        $enfermedades->enfermedades_nombre = $request->get('enfermedades_nombre');
        $enfermedades->save();
        return redirect('listadoen');
    }

    public function edit($id)
    {
        return view('listadoen.edit', ["enfermedades" => ListaEnfermedades::findOrFail($id)]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'enfermedades_nombre' => 'required|unique:enfermedades,enfermedades_nombre,' . $id . ',enfermedades_id',
        ]);
        $enfermedades = ListaEnfermedades::findOrFail($id);
        $enfermedades->enfermedades_nombre = $request->get('enfermedades_nombre');
        $enfermedades->update();
        return redirect('listadoen');
    }

}
