<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Support\Facades\Log;
use Livewire\Component;
use App\Models\Noticia;
use App\Models\Noticia_destacada;
use Facade\Ignition\ErrorPage\Renderer;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class NewsIndex extends Component
{
    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = "bootstrap";
    public $estado=1;
    public $destacado;
    public $destacada2  ;
    public $search;
    protected $listeners = ['mount','deshabilitar','eliminar','destacada_nuevo1'];
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function mount()
    {
        $this->destacada2 = Noticia_destacada::pluck('noticias_id');
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

    public function destacada_nuevo1(Noticia_destacada $destacada)
    {
        $destacada = Noticia_destacada::find(1);
        $destacada->noticias_id = $this->destacada2;
        $destacada->save();
    }
}
