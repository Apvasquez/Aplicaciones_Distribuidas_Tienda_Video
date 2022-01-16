<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Empleado;

class EmpleadosL extends Component
{
    public $empleados ;
    public function render()
    {
        $empleados = Empleado::all();

        return dd($empleados);
    }
}
