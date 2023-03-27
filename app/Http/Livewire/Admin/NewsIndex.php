<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Noticia;
use App\Models\Noticia_destacada;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class NewsIndex extends Component
{
    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = "bootstrap";
    public $estado=1;
    public $destacado;
    public $search;
    protected $listeners = ['render','deshabilitar','eliminar','destacada'];
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {   
        $destacada=Noticia_destacada::first();
        $news = Noticia::
        where(function($search){
            $search->where('titulo','LIKE','%'.$this->search.'%')
            ->orwhere('contenido','LIKE','%'.$this->search.'%');
        })
        ->where('estado',$this->estado)
        ->paginate(20);
        return view('livewire.admin.news-index',compact('news','destacada'));
    }
    
    public function deshabilitar(Noticia $news)
    {
        if ($news->estado == 1  ){
            $news->update(['estado' => '0']);
        }
        else{
            $news->update(['estado' => '1']);
        }
    }
    public function eliminar(Noticia $news)
    {
        $news->update(['estado' => '2']);
    }
    public function destacada(Noticia $news,Noticia_destacada $destacada)
    {
        $destacada->update(['noticias_id' => $news->id]);
    }
}
