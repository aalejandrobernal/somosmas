<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Noticia;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class NewsIndex extends Component
{
    use WithPagination;
    use WithFileUploads;
    public $search;
    public $imagenes = [];
    protected $paginationTheme = "bootstrap";

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        $news = Noticia::where('titulo','LIKE','%'.$this->search.'%')
        ->orwhere('contenido','LIKE','%'.$this->search.'%')
        ->paginate(4);
        return view('livewire.admin.news-index',compact('news'));
    }
}
