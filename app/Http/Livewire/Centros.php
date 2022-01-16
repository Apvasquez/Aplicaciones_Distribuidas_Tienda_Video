<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Centro;

class Centros extends Component
{
    public $search = ''; 
    public $nombre = '';
    public $direcccion = '';
    public $telefono= '';
    public $id_cent;
    public $accion = 'store';
    protected $rules = [ 
        'nombre' => 'required',
        'direccion' => 'required',
        'telefono' => 'required'
    ];

    protected $messages = [ 
        'nombre.required' => "Ingrese nombre obligatorio",
        'direccion.required' => "Ingrese una direccion valida",
        'telefono.required' => "Ingrese un telefono obligatorio"
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
       public function render()
    {
        $centro = Centro::where('nombre','like','%'. $this->search . '%')->get();;
        return view('livewire.centros',compact('centros'));
    }
    public function store()
    {
        // $this->accion = "store";
        $this->validate();
        Categoria::create([ 
            'nombre' => $this->nombre,
            'direccion' => $this->direccion,
            'telefono' => $this->telefono,
        ]);

        $this->reset(['nombre','direccion','accion','telefono']);
    }

    //Edit Corresponsales
    public function edit(Categoria $corr)
    {
        $this->accion = "update"; 
        $this->nombre = $corr->nombre;
        $this->direccion = $corr->direccion;
        $this->telefono= $corr->telefono;
        $this->id_cent = $corr->id;

    }


    public function update()
    {
        $this->validate();
        $corr = Categoria::find($this->id_cent);
        $corr->update([
            'nombre' => $this->nombre,
            'direccion' => $this->direccion,
            'telefono' => $this->telefono,

        ]);
        $this->reset(['nombre','direccion','accion','telefono']);


    }
    function
default() {
    $this->reset(['nombre','direccion','accion','telefono']);

    }
    public function destroy(Categoria $corr)
    {
        $corr->delete();
    }
}
