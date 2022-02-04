<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Consulta;

class Centro extends Model
{
    // protected $table = "centro";
    use HasFactory;

    protected $fillable = [ 'nombre', 'direccion','telefono'];
    public function consulta()
    {
        return $this->hasMany('App\Models\Consulta','centro_codigo','id');
    }
    public function empleado()
    {
        return $this->hasMany('App\Models\Empleado','centro_codigo','id');
    }

}
