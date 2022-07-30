<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListaEnfermedades extends Model
{
    protected $table='enfermedades';
    protected $primaryKey = "enfermedades_id";
    public $timestamps=true;
    protected $fillable=[
        'enfermedades_nombre'
    ];
}
