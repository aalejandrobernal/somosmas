<?php

namespace App\Http\Livewire\Admin;

use App\Models\Noticia;
use Livewire\Component;

class CreateNew extends Component
{
    public $imagenes = [];
    public $titulo;
    public $contenido;
    public $adjunto;
    public $estado;
    protected $rules = [
        'titulo' => 'required',
        'contenido' => 'required',
        'adjunto' => 'required',
        'estado' => 'required|in:1,0',
    ];

    public function submit()
    {
         $this->validate();
        Noticia::create([
            'titulo' => $this->titulo,
            'contenido' => $this->contenido,
            'adjunto' => $this->adjunto,
            'estado' => $this->estado,
        ]);
    }
    public function render()
    {
        return view('livewire.admin.create-new');
    }
}
