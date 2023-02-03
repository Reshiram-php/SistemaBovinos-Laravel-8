<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
   

    static $rules=[
        'title'=>'required',
        'descripcion'=>'required',
        'start'=>'required',
        'end'=>'required'
    ];

    protected $fillable=['title', 'descripcion','start','end','id_user','monta_id','embarazo_id','actividades_id','vacunas_id','partos_id'];
}