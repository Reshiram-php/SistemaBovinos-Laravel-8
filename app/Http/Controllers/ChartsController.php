<?php

namespace App\Http\Controllers;

use App\Ordeño;
use App\Peso;
use App\RegistroOrdeño;
use Illuminate\Http\Request;
use DB;

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

        if(isset($request->peso['start'])){
            $pesoStart = $request->peso['start'];
        }

        if(isset($request->peso['end'])){
            $pesoEnd = $request->peso['end'];
        }

        if(isset($request->peso['groupBy'])){
            $pesoGroupBy = $request->peso['groupBy'];
        }

        if(isset($request->peso['groupBy'])){
            $lecheGroupBy = $request->peso['groupBy'];
        }

       if(isset($request->leche['start'])){
            $lecheStart = $request->leche['start'];
        }

        if(isset($request->leche['end'])){
            $lecheEnd = $request->leche['end'];
        }

        $promedioPesos = Peso::selectRaw('AVG(registro_peso_valor) as current')
        ->selectRaw('AVG(peso_anterior) as old')
        ->selectRaw("TO_CHAR(TO_DATE(registro_peso_fecha, 'YYYYDDMM'), '$pesoGroupBy') as mes")
        ->when(
            $pesoStart,
            fn ($query, $start) => $query->where('registro_peso_fecha', '>=', $pesoStart)
        )->when(
            $pesoEnd,
            fn ($query, $end) => $query->where('registro_peso_fecha', '<=', $pesoEnd)
        )->when(
            $pesoGroupBy,
            fn ($query, $end) => $query->groupByRaw("TO_CHAR(TO_DATE(registro_peso_fecha, 'YYYYDDMM'), '$pesoGroupBy')")
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
}