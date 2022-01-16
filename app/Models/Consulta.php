<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    use HasFactory;

    protected $primaryKey = 'codigo';
    public $incrementing = false;
    protected $table = 'consulta';
    protected $filliable = ['centro_codigo','empleado_codigo','especialidad_codigo','fecha','hora','paciente'];
}
