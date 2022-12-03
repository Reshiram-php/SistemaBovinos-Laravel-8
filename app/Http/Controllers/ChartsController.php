<?php

namespace App\Http\Controllers;

use App\Ordeño;
use App\Peso;
use App\RegistroOrdeño;
use Illuminate\Http\Request;
use DB;
use App\Animal;
use App\Abortos;
use App\Enfermedades;
use App\Partos;
use App\Vacunas;
use App\Muertes;

class ChartsController extends Controller
{
    public function charts(Request $request)
    {
        $registrosOrdernos = RegistroOrdeño::all();

        $pesoGroupBy = 'Month';
        $pesoStart = false;
        $pesoEnd = false;
        $lecheGroupBy = 'Month';
        $lecheStart = false;
        $lecheEnd = false; 

        if(isset($request->pesostart)){
            $pesoStart = $request->pesostart;
            
           
        }

        if(isset($request->pesoend)){
            $pesoEnd = $request->pesoend;
            
        }

        if(isset($request->pesogroupBy)){
            $pesoGroupBy = $request->pesogroupBy;
        }

        if(isset($request->lechegroupBy)){
            $lecheGroupBy = $request->pesogroupBy;
        }

       if(isset($request->lechestart)){
            $lecheStart = $request->lechestart;
        }

        if(isset($request->lecheend)){
            $lecheEnd = $request->lecheend;
        }

        $promedioPesos = Peso::selectRaw('AVG(registro_peso_valor) as current')
        ->selectRaw('AVG(peso_anterior) as old')
        ->selectRaw("TO_CHAR(registro_peso_fecha, '$pesoGroupBy') as mes")
        ->when(
            $pesoStart,
            fn ($query, $start) => $query->where('registro_peso_fecha', '>=', $pesoStart)
        )->when(
            $pesoEnd,
            fn ($query, $end) => $query->where('registro_peso_fecha', '<=', $pesoEnd)
        )->when(
            $pesoGroupBy,
            fn ($query, $end) => $query->groupByRaw("TO_CHAR(registro_peso_fecha, '$pesoGroupBy')")
        )->get();

        $promedioleche = Ordeño::selectRaw('AVG(registro_ordeño_litros) as current')
        ->selectRaw('AVG(registro_ordeño_cantidad) as old')
        ->selectRaw("TO_CHAR(registro_ordeño_fecha, '$lecheGroupBy') as mes")
        ->when(
            $lecheStart,
            fn ($query, $start) => $query->where('registro_ordeño_fecha', '>=', $lecheStart)
        )->when(
            $lecheEnd,
            fn ($query, $end) => $query->where('registro_ordeño_fecha', '<=', $lecheEnd)
        )->when(
            $lecheGroupBy,
            fn ($query, $end) => $query->groupByRaw("TO_CHAR(registro_ordeño_fecha, '$lecheGroupBy')")
        )->get();

        return view('analisis', [
            'promedioPesos' => $promedioPesos,
            'pesoStart' => $pesoStart,
            'pesoEnd' => $pesoEnd,
            'pesoGroupBy' => $pesoGroupBy,
            'promedioleche' => $promedioleche,
            'lecheGroupBy' => $lecheGroupBy,
            'lecheStart' => $lecheStart,
            'lecheEnd' => $lecheEnd,
         /*    'promedioLeches' => $promedioLeches,
            
            'lecheGroupBy' => $lecheGroupBy */
        ]);
    }

    public function charts2(Request $request){

        $ternero= Animal::where('animal_categoria',1)
        ->where('animal_estado', '!=', 2)
        ->where('animal_estado', '!=', 3)
        ->where('animal_id','!=',"inseminación")
        ->get()->count();
        $torete= Animal::where('animal_categoria',2)
        ->where('animal_estado', '!=', 2)
        ->where('animal_estado', '!=', 3)
        ->where('animal_id','!=',"inseminación")
        ->get()->count();
        $vacona= Animal::where('animal_categoria',3)
        ->where('animal_estado', '!=', 2)
        ->where('animal_estado', '!=', 3)
        ->where('animal_id','!=',"inseminación")
        ->get()->count();
        $toro= Animal::where('animal_categoria',4)
        ->where('animal_estado', '!=', 2)
        ->where('animal_estado', '!=', 3)
        ->where('animal_id','!=',"inseminación")
        ->get()->count();
        $vaca= Animal::where('animal_categoria',5)
        ->where('animal_estado', '!=', 2)
        ->where('animal_estado', '!=', 3)
        ->where('animal_id','!=',"inseminación")
        ->get()->count();
        $vacunas=Vacunas::get()->count();
    
        $partos=Partos::get()->count();
        $enfermedades=Enfermedades::get()->count();
        $abortos=Abortos::get()->count();
        $muertes=Muertes::get()->count();
        return view('estado',[
            'ternero'=>$ternero,
            'torete'=>$torete,
            'vacona'=>$vacona,
            'toro'=>$toro,
            'vaca'=>$vaca,
            'vacunas'=>$vacunas,
            'partos'=>$partos,
            'enfermedades'=>$enfermedades,
            'abortos'=>$abortos,
            'muertes'=>$muertes  ]);

    }
}