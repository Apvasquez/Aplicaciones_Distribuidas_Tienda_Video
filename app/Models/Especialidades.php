<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especialidades extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = ['codigo', 'nombre', 'descripcion'];
    public function consulta()
    {
        return $this->hasMany('App\Models\Consulta','especiaidad_codigo','codigo');
    }

}
