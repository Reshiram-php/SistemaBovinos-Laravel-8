<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Animal;
use App\Partos;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StartPeriodoSeco extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'start:periodoseco';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $fecha2=Carbon::now();
        $partos=Partos::select('partos_madre', DB::raw('max(partos_fecha)as partos_fecha'))->groupBy('partos_madre');
        $animal=Animal::joinSub($partos, 'partos', function ($join) {
            $join->on('animal_id', "=", "partos.partos_madre");
        })->where('animal_produccion', "=", 2)->get();

        foreach ($animal as $ani) {
            $fecha=Carbon::parse($ani->partos_fecha);
            $diff=$fecha->diffInDays($fecha2, false);
            if ($diff>300) {
                $ani->animal_produccion=3;
                $ani->fecha_secado=$fecha->addDays(300);
                $ani->save();
            }
        }
    }
}
