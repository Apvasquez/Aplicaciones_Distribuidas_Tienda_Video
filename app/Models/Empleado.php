<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{


    use HasFactory;

    protected $fillable = ['nombre','direccion','salario','fecha_entrada','centro_codigo','medico_codigo'];
    public function consulta()
    {
        return $this->hasMany('App\Models\Consulta','empleado_codigo','id');
    }
    public function centro(){
        return $this->belongsTo('App\Models\Centro','id','id');


    }
}
