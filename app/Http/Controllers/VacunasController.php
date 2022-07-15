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
use DB;
use Auth;
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
        if(request()->ajax()){
       
            if(!empty($request->from_date))
            {
                $data=Vacunas::join('vacunas','registro_vacunas.vacuna_id','=','vacunas.vacuna_id')->whereBetween('registro_vacunas_fecha', array($request->from_date, $request->to_date))->get();
            }
            else
            {
                $data=Vacunas::join('vacunas','registro_vacunas.vacuna_id','=','vacunas.vacuna_id')->get();
           
        }
        return datatables()->of($data)
        ->addColumn('proxima',function($proxima){
            if($proxima->registro_vacunas_proxima==null)
            {
                return "Dosis Única";
            }
            else{
               return $proxima->registro_vacunas_proxima->toDateString();
            }
        })
        ->addColumn('pdf', function ($pdf) {
            return '<a href="' . route('vacunas.individual', $pdf->registro_vacunas_id) . '">
            <button class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top"
                title="Informe del parto"><i class="mdi mdi-file-pdf"></i>
            </button></a>
            <a href="' . route('vacunas.edit', $pdf->registro_vacunas_id) . '">
                <button class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top"
                        title="editar"><i class="ti-pencil"></i>
                    </button></a>';
        }
        )
        ->rawColumns(['pdf','proxima'])
        ->make(true);   
    }
    return view('vacunas.index');
}

    public function create()
    {
        $animales=Animal::where('animal_estado','<',2)->where('animal_id','!=',"inseminación")->orWhere('animal_estado','>',3)->get();
        return view('vacunas.create',["animales"=>$animales]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VacunasFormRequest $request)
    {
        $vacunas = new Vacunas;
        $vacunas->animal_id = $request->get('animal');
        $vacunas->vacuna_id=$request->get('vacuna');
        $vacunas->registro_vacunas_fecha=$request->get('fecha');
        $vacunas->registro_vacunas_proxima=$this->CalcFecha($request->get('fecha'),$request->get('vacuna'));
        $vacunas->save();
        $vacunas2 = Vacunas::get()->last();
        $nombre=ListaVacunas::findOrFail($vacunas2->vacuna_id);
        DB::insert('insert into eventos(title, descripcion, "start", "end",id_user,vacunas_id) values (?,?,?,?,?,?)',[$nombre->vacuna_nombre, 'vacunación '.$nombre->vacuna_nombre.' de '.$request->get('animal'),$vacunas2->registro_vacunas_proxima,$vacunas2->registro_vacunas_proxima,Auth::user()->id,$vacunas2->registro_vacunas_id]);
        return redirect('vacunas'); 
    }

    protected function CalcFecha($fecha,$vacuna)
    {
        $fecha=Carbon::parse($fecha);
    
        if($vacuna==4)
        {
           return $fecha->addMonths(6);
        }
        else{
            if($vacuna==5 || $vacuna==7 ){
               return $fecha->addMonths(6); 
            }
            else{
                if($vacuna==6){
                    return $fecha->addYear();
                }
                else
                {
                    return $fecha=null;
                }
            }
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
        $animales=Animal::where('animal_estado','<',2)->where('animal_id','!=',"inseminación")->orWhere('animal_estado','>',3)->get();
        $vacunas = Vacunas::findOrFail($id);
        $nombre=ListaVacunas::findOrFail($vacunas->vacuna_id);
        return view('vacunas.edit',["animales"=>$animales,"vacuna"=>$vacunas,"nombrev"=>$nombre]);
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
        $vacunas = Vacunas::findOrFail($id);
        $vacunas->animal_id = $request->get('animal');
        $vacunas->vacuna_id=$request->get('vacuna');
        $vacunas->registro_vacunas_fecha=$request->get('fecha');
        $vacunas->registro_vacunas_proxima=$this->CalcFecha($request->get('fecha'),$request->get('vacuna'));
        $vacunas->update();
        $nombre=ListaVacunas::findOrFail($vacunas->vacuna_id);
        DB::update('update eventos set title =  ? , descripcion= ? , "start" = ? , "end" = ? ,id_user = ? where vacunas_id = ?',[$nombre->vacuna_nombre, 'vacunación '.$nombre->vacuna_nombre.' de '.$request->get('animal'),$vacunas->registro_vacunas_proxima,$vacunas->registro_vacunas_proxima,Auth::user()->id,$vacunas->registro_vacunas_id]);
        return redirect('vacunas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function SelectVacunas($id)
    {
        $animales=Animal::findOrFail($id);
        $cat=$animales->animal_categoria;
        if($cat==1)
        {
            return ListaVacunas::where('vacuna_nivel','=',1)->orWhere('vacuna_nivel','=',null)->get();
        }
        else{
            if($cat<4)
            {
                return ListaVacunas::where('vacuna_nivel',2)->orWhere('vacuna_nivel','=',null)->get();
            }
            else{
                return ListaVacunas::where('vacuna_nivel',3)->orWhere('vacuna_nivel','=',null)->get();
            }
        }
        

    }
}
