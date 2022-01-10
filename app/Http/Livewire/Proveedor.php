<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Proveedores;

class Proveedor extends Component
{
    public $search = '';
    public $nombre = '';
    public $lugar = '';
    public $descripcion = '';
    public $id_cat;
    public $accion = 'store';

  
       public function render()
    {
        $proveedor = Proveedores::where('nombre','like','%'. $this->search . '%')->get();
        return view('livewire.proveedor',compact('proveedor'));
    }
    public function store()
    {
        // $this->accion = "store";

        Proveedores::create([
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'lugar' => $this->lugar,
        ]);

        $this->reset(['nombre', 'descripcion','accion','lugar']);
    }

    //Edit Corresponsales
    public function edit(Proveedores $corr)
    {
        $this->accion = "update";
        $this->nombre = $corr->nombre;
        $this->descripcion = $corr->descripcion;
        $this->lugar = $corr->lugar;
        $this->id_cat = $corr->id;

    }


    public function update()
    {
        $this->validate();
        $corr = Proveedores::find($this->id_cat);
        $corr->update([
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'lugar' => $this->lugar,

        ]);
        $this->reset(['nombre', 'descripcion','accion','lugar']);


    }
    function
default() {
    $this->reset(['nombre', 'descripcion','accion','lugar']);

    }
    public function destroy(Proveedores $corr)
    {
        $corr->delete();
    }
}
