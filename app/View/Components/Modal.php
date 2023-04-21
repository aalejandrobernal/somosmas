<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Banner;
use Illuminate\Support\Facades\Log;

class Modal extends Component
{
    public $id;
    public $registro ;
    public $orden ;
    public function __construct($id)
    {
        $this->id = $id;
    }

    public function render()
    {
        $this->registro = Banner::find($this->id);
        $this->orden = Banner::where('estado','1')
        ->orderBy('orden', 'asc')
        ->get();
        return view('components.modal');
    }
}
