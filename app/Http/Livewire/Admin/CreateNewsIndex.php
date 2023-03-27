<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;

class CreateNewsIndex extends Component
{
    use WithFileUploads;

    public $imagenes = [];
    public function render()
    {
        return view('livewire.admin.create-news-index');
    }
}
