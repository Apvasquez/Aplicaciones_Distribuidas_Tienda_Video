<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    protected $filliable = ['codigo','nombre','direccion','salario','fecha_entrega','centro_codigo','medico_codigo'];
    public function consulta()
    {
        return $this->hasMany('App\Models\Consulta','empleado_codigo','codigo');
    }
}
