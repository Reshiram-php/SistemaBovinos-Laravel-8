<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Vacunas;
use Carbon\Carbon;
use App\ListaVacunas;
use App\Http\Requests\VacunasFormRequest;
use App\Animal;
use App\Evento;
use App\Events\PostEvent;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use DateTime;

class VacunasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
     public function index(Request $request)
     {
         if (request()->ajax()) {
             if (!empty($request->from_date)) {
                 $data=Vacunas::join('vacunas', 'registro_vacunas.vacuna_id', '=', 'vacunas.vacuna_id')->whereBetween('registro_vacunas_fecha', array($request->from_date, $request->to_date))->get();
             } else {
                 $data=Vacunas::join('vacunas', 'registro_vacunas.vacuna_id', '=', 'vacunas.vacuna_id')->get();
             }
             return datatables()->of($data)
             ->addColumn('proxima', function ($proxima) {
                 if ($proxima->registro_vacunas_proxima==null) {
                     return "Dosis Única";
                 } else {
                     return $proxima->registro_vacunas_proxima->toDateString();
                 }
             })
             ->addColumn(
                 'pdf',
                 function ($pdf) {
                     $us=Auth::user();
                     if ($us->can('vacunas.delete')) {
                         return '<a href="' . route('vacunas.individual', $pdf->registro_vacunas_id) . '">
            <button class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top"
                title="Informe del parto"><i class="mdi mdi-file-pdf"></i>
            </button></a>
            <a href="' . route('vacunas.edit', $pdf->registro_vacunas_id) . '">
                <button class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top"
                        title="editar"><i class="ti-pencil"></i>
                    </button></a>
                    <a href="'.route('vacunas.delete', $pdf->registro_vacunas_id).'">
                    <button class="btn btn-warning btn-sm" onclick="return confirm(\'¿Seguro desea eliminar el registro de vacunación '.$pdf->registro_vacunas_id.'? esta opción es irreversible\')" data-toggle="tooltip" data-placement="top"
                        title="eliminar"><i class="ti-trash"></i>
                    </button></a>';
                     } else {
                         return '<a href="' . route('vacunas.individual', $pdf->registro_vacunas_id) . '">
                        <button class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top"
                            title="Informe del parto"><i class="mdi mdi-file-pdf"></i>
                        </button></a>
                        <a href="' . route('vacunas.edit', $pdf->registro_vacunas_id) . '">
                            <button class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top"
                                    title="editar"><i class="ti-pencil"></i>
                                </button></a>
                                ';
                     }
                 }
             )
             ->rawColumns(['pdf','proxima'])
             ->make(true);
         }
         return view('vacunas.index');
     }

    public function create()
    {
        $animales=Animal::where('animal_estado', '<', 2)->where('animal_id', '!=', "inseminación")->where('animal_id', '!=', "desconocido")->orWhere('animal_estado', '>', 3)->get();
        return view('vacunas.create', ["animales"=>$animales]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VacunasFormRequest $request)
    {
        $vacunas = new Vacunas();
        $vacunas->animal_id = $request->get('animal');
        $vacunas->vacuna_id=$request->get('vacuna');
        $vacunas->registro_vacunas_fecha=$request->get('fecha');
        $vacunas->registro_vacunas_proxima=$this->CalcFecha($request->get('fecha'), $request->get('vacuna'));
        $vacunas->save();
        $vacunas2 = Vacunas::get()->last();
        $nombre=ListaVacunas::findOrFail($vacunas2->vacuna_id);
        if ($vacunas2->registro_vacunas_proxima!=null) {
            $post=Evento::create([
                'id_user' => Auth::user()->id,
                'title' => 'vacunación '.$nombre->vacuna_nombre,
                'descripcion' => 'vacunación '.$nombre->vacuna_nombre.' de '.$request->get('animal'),
                'start' => $vacunas2->registro_vacunas_proxima,
                'end' =>$vacunas2->registro_vacunas_proxima,
                'vacunas_id'=> $vacunas2->registro_vacunas_id,
            ]);
            event(new PostEvent($post));
        }
        return redirect('vacunas');
    }

    protected function CalcFecha($fecha, $vacuna)
    {
        $fecha=Carbon::parse($fecha);

        $data= ListaVacunas::findOrFail($vacuna);
        if ($data->vacuna_dias==null) {
            return $fecha=null;
        } else {
            return $fecha->addDays($data->vacuna_dias);
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $animales=Animal::where('animal_estado', '<', 2)->where('animal_id', '!=', "inseminación")->where('animal_id', '!=', "desconocido")->orWhere('animal_estado', '>', 3)->get();
        $vacunas = Vacunas::findOrFail($id);
        $nombre=ListaVacunas::findOrFail($vacunas->vacuna_id);
        return view('vacunas.edit', ["animales"=>$animales,"vacuna"=>$vacunas,"nombrev"=>$nombre]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $eventoid=Evento::where('vacunas_id', $id)->first();
        $notificaciones= DB::table('notifications')->where('data->evento', $eventoid->id)->delete();
        $eventoid->delete();
        $vacunas = Vacunas::findOrFail($id);
        $vacunas->animal_id = $request->get('animal');
        $vacunas->vacuna_id=$request->get('vacuna');
        $vacunas->registro_vacunas_fecha=$request->get('fecha');
        $vacunas->registro_vacunas_proxima=$this->CalcFecha($request->get('fecha'), $request->get('vacuna'));
        $vacunas->update();
        $nombre=ListaVacunas::findOrFail($vacunas->vacuna_id);
        if ($vacunas->registro_vacunas_proxima!=null) {
            $post=Evento::create([
                'id_user' => Auth::user()->id,
                'title' => 'vacunación '.$nombre->vacuna_nombre,
                'descripcion' => 'vacunación '.$nombre->vacuna_nombre.' de '.$request->get('animal'),
                'start' => $vacunas->registro_vacunas_proxima,
                'end' =>$vacunas->registro_vacunas_proxima,
                'vacunas_id'=> $vacunas->registro_vacunas_id,
            ]);
            event(new PostEvent($post));
        }
        return redirect('vacunas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $vacunas = Vacunas::findOrFail($id);
        $vacunas->delete();
        return redirect('vacunas');
    }

    public function SelectVacunas($id)
    {
        $animales=Animal::findOrFail($id);
        $cat=$animales->animal_categoria;
        if ($cat==1) {
            return ListaVacunas::where('vacuna_descripcion', '=', 1)->orWhere('vacuna_descripcion', '=', 2)->orWhere('vacuna_descripcion', '=', 5)->orWhere('vacuna_descripcion', '=', 6)->get();
        } else {
            if ($cat<4) {
                return ListaVacunas::where('vacuna_descripcion', 1)->orWhere('vacuna_descripcion', '=', 3)->orWhere('vacuna_descripcion', '=', 5)->orWhere('vacuna_descripcion', '=', 7)->get();
            } else {
                return ListaVacunas::where('vacuna_descripcion', 1)->orWhere('vacuna_descripcion', '=', 4)->orWhere('vacuna_descripcion', '=', 6)->orWhere('vacuna_descripcion', '=', 7)->get();
            }
        }
    }
}
