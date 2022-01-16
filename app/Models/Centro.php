<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Consulta;

class Centro extends Model
{
    use HasFactory;
    protected $fillable = ['codigo', 'nombre', 'direccion','telefono'];
    public function consulta()
    {
        return $this->hasMany('App\Models\Consulta','centro_codigo','codigo');
    }
    public function empleado()
    {
        return $this->hasMany('App\Models\Empleado','empleado_codigo','codigo');
    }

}
