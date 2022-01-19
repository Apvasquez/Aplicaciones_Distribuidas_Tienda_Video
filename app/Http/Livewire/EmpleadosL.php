<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Empleado;
use App\Models\Centro;


class EmpleadosL extends Component
{
    public $search = '';
    public $id_emp ,$nombre,$direccion,$salario,$fecha_entrada,$centro_codigo = '1';
    public $accion = "store";
    protected $rules = [
        'nombre' => 'required',
        'direccion' => 'required',
        'salario' => 'required|numeric',
        'fecha_entrada' => 'required',
        'centro_codigo' => 'required'

    ];

    protected $messages = [
        'nombre.required' => "Ingrese nombre Obligatorio",
        'direccion.required' => "Ingrese una direccion",
        'salario.required' => "Ingrese el salario...",
        'fecha_entrada.required' => "Ingrese una fecha",
        'centro_codigo.required' => "Ingrese el codigo...",
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()

    {   $centros = Centro::all();
        $empleados = Empleado::where('nombre','like','%'. $this->search . '%')->orWhere('direccion','like','%'. $this->search . '%')->get();

        return view('livewire.empleados-l',compact('empleados','centros'));
    }
    public function store()
    {
        // $this->accion = "store";
        $this->validate();
        Empleado::create([
            'nombre' => $this->nombre,
            'direccion' => $this->direccion,
            'salario' => $this->salario,
            'fecha_entrada' => $this->fecha_entrada,
            'centro_codigo' => $this->centro_codigo,

        ]);

        $this->reset(['nombre','direccion','accion','salario','fecha_entrada','centro_codigo']);
    }

    public function edit(Empleado $emp)
    {
        $this->accion = "update";
        $this->nombre = $emp->nombre;
        $this->direccion = $emp->direccion;
        $this->salario= $emp->salario;
        $this->fecha_entrada= $emp->fecha_entrada;
        $this->centro_codigo= $emp->centro_codigo;
        $this->id_emp = $emp->id;

    }


    public function update()
    {
        $this->validate();
        $emp = Empleado::find($this->id_emp);
        $emp->update([
            'nombre' => $this->nombre,
            'direccion' => $this->direccion,
            'salario' => $this->salario,
            'fecha_entrada' => $this->fecha_entrada,
            'centro_codigo' => $this->centro_codigo,

        ]);
        $this->reset(['nombre','direccion','accion','salario','fecha_entrada','centro_codigo']);


    }
    function
default() {
    $this->reset(['nombre','direccion','accion','salario','fecha_entrada','centro_codigo']);

    }
    public function destroy(Empleado $emp)
    {
        $emp->delete();
    }
}
