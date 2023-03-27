<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Noticia;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class EditNewsIndex extends Component
{
    use WithFileUploads;
    public $new;
    public $imagenes = [];
    public $titulo;
    public $estado;
    public $contenido;
    public $adjunto ;
   
    protected $rules = [
        'new.titulo' => 'required',
        'new.estado' => 'required',
        'new.contenido' => 'required',
        'new.imagenes' => 'max:2048',
    ];

    public function mount(Noticia $new){
        $this->new = $new;
    }
    public function update (){
        $this->validate();
        $imagenes_final =[];
        $i=0;
        if($this->imagenes){
            foreach ($this->imagenes as $imagen) {
                $image = $imagen;
                $avatarName = substr(uniqid(rand(), true), 8, 8) . '.' . $image->getClientOriginalExtension();
                $img = Image::make($image->getRealPath())->encode('jpg', 65)
                ->fit(760, null, function ($c) {
                    $c->aspectRatio();
                    $c->upsize();
                });
                $img->stream();
                Storage::disk('local')->put('public/images/noticias' . '/' . $avatarName, $img, 'public');
                $i++;
                if ($i<count($this->imagenes)){
                    $nombre_foto=$avatarName.',';
                }else{
                    $nombre_foto=$avatarName;
                }
                array_push($imagenes_final,$nombre_foto);
                $a=implode($imagenes_final);
            }
        }else{
            $a=$this->new->imagenes;
        }
        if($this->contenido){
            $this->new->contenido = $this->contenido;
        }
            $this->new->save([
            'titulo' => $this->titulo,
            'estado' => $this->estado,
            'contenido' => $this->contenido,
            'imagenes' => $a,
        ]);
        return redirect()->route('admin.news.index')->with('info','La Noticia ha sido actualizada con éxito');
    }

    public function render()
    {
        return view('livewire.admin.edit-news-index');
    }
}
