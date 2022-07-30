<?php

namespace App\Http\Controllers;

use App\ListaVacunas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ListaVacunasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('listadova.index');
    }

    public function create()
    {
        return view('listadova.create');
    }
    public function datos()
    {
        $listado = ListaVacunas::join('descripciones', 'vacunas.vacuna_descripcion', '=', 'descripciones.descripcion_id')->get();

        return datatables()->of($listado)
            ->addColumn('periodicidad', function ($pdf) {
                if ($pdf->vacuna_dias == null) {
                    return 'Dosis Única';
                } else {
                    return $pdf->vacuna_dias.' días';
                }
            }
            )
            ->addColumn('pdf', function ($pdf) {
                return '<a href="' . route('listadova.edit', $pdf->vacuna_id) . '">
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
            'vacuna_nombre' => 'required|unique:vacunas,vacuna_nombre',
            'dosis'=> 'required',
            'categoria'=>'required',
            'periodicidad'=>'required_if:dosis,cada_cierto_tiempo',
        ]);
        $vacuna = new ListaVacunas;
        $vacuna->vacuna_nombre = $request->get('vacuna_nombre');
        $vacuna->tipo_dosis=$request->get('dosis');
        if($request->get('dosis')=="unica")
        {
            $vacuna->vacuna_dias=null;
        }
        else{
            $vacuna->vacuna_dias=$request->get('periodicidad');
        }
        $vacuna->vacuna_descripcion= $request->get('categoria');
        $vacuna->save();
        return redirect('listadova');
    }

    public function edit($id)
    {
        return view('listadova.edit', ["vacuna" => ListaVacunas::findOrFail($id)]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'vacuna_nombre' => 'required|unique:vacunas,vacuna_nombre,' . $id . ',vacuna_id',
            'dosis'=> 'required',
            'categoria'=>'required',
            'periodicidad'=>'required_if:dosis,cada_cierto_tiempo',
        ]);

        $vacuna = ListaVacunas::findOrFail($id);
      $vacuna->vacuna_nombre = $request->get('vacuna_nombre');
      $vacuna->tipo_dosis=$request->get('dosis');
        if($request->get('dosis')=="unica")
        {
            $vacuna->vacuna_dias=null;
        }
        else{
            $vacuna->vacuna_dias=$request->get('periodicidad');
        }
        $vacuna->vacuna_descripcion= $request->get('categoria');
        $enfermedades->update();
        return redirect('listadoen');
    }
}
