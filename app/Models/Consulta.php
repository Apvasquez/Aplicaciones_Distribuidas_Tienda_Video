<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    use HasFactory;

    protected $fillable = ['centro_codigo','empleado_codigo','especialidad_codigo','fecha','hora','paciente'];
    public function centro()
{
    return $this->belongsTo('App\Models\Centro','centro_codigo','id');
}
public function especialidad()
{
    return $this->belongsTo('App\Models\Especialidades','especialidad_codigo','id');
}
public function empleado()
{
    return $this->belongsTo('App\Models\Empleado','empleado_codigo','id');
}
}

