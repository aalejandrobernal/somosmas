<?php

namespace App\Http\Livewire\Admin;

use Dotenv\Util\Str;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Noticia;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;


class CreateNewsIndex extends Component
{
    use WithFileUploads;

    public $imagenes = [];
    public $titulo;
    public $estado = 0;
    public $contenido;
    public $adjunto ;
    public $a;
    

    protected $rules = [
        'titulo' => 'required|unique:noticias,titulo',
        'estado' => 'required',
        'contenido' => 'required',
        'imagenes' => 'required|max:2048',
    ];
    
    public function render()
    {
        return view('livewire.admin.create-news-index');
    }
    public function save()
    {
        $this->validate();
        $imagenes_final =[];
        $i=0;
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
        Noticia::create([
            'imagenes' =>$a,
            'titulo' => $this->titulo,
            'estado' => $this->estado,
            'contenido' => $this->contenido,
            'adjunto' => $this->adjunto,
        ]);
        return redirect()->route('admin.news.index')->with('info','La Noticia ha sido creada con éxito');
        
    }
       
}