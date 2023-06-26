<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Comites;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class CommitteesIndex extends Component
{
    use WithFileUploads;
    public $imagen;
    public $cuerpo;
    public $estado = 1;
    public $estado_nuevo =1;
    public $titulo ;
    public $adjunto ;
    // public $orde=[];.
    protected $listeners = ['update','deshabilitar','delete','render'];

    protected $rules = [
    
        'titulo' => 'required',
        'cuerpo' => 'required',
        'imagen' => 'required|max:2048|image',
        'adjunto' => 'required',
    ];
    public function render()
    {
        $forms = 
        Comites::where('estado',$this->estado)
        ->orderBy('orden', 'asc')
        ->get();

        return view('livewire.admin.committees-index',compact('forms'));
   }
    public function create()
    {
        $this->validate();
        $image = $this->imagen;
        $avatarName = substr(uniqid(rand(), true), 8, 8) . '.' . $image->getClientOriginalExtension();
        $img = Image::make($image->getRealPath())->encode('jpg', 65)
            ->fit(800,533, function ($c) {
                $c->aspectRatio();
                $c->upsize();
        });
        $img->stream();
        $banner =Comites::create([
            'imagen' =>$avatarName,
            'estado' => $this->estado_nuevo,
            'titulo' => $this->titulo,
            'adjunto' => $this->adjunto,
            'cuerpo' => $this->cuerpo,
            'orden' => 0,
        ]);
        $this->dispatchBrowserEvent('close-modal');
        Storage::disk('local')->put('public/images/comites' . '/' . $avatarName, $img, 'public');
        
        if($this->estado_nuevo==1){
             $banner->update(['orden' => $this->ordenar_sin()]);
        }
        $this->reset(['imagen','titulo','adjunto','estado_nuevo','cuerpo']);
        return view('livewire.admin.banners-index');
    }
    public function deshabilitar(Comites $banner)
    {
        
        if ($banner->estado == 1){
            $banner->update(['estado' => '0','orden' => 0]);
            $banner->update(['estado' => '0']);
            $this->ordena();
        }
        else{
            $banner->update(['estado' => '1','orden' => $this->ordenar_sin()]);
            $banner->update(['estado' => '1']);
        }
    }
    public function delete(Comites $banner)
    {
        $banner->update(['estado' => '2']);
    }
    public function ordenar_sin()
    {
        return max(json_decode(json_encode(Comites::pluck('orden')), true))+1;
        //suma 1 al valor maximo de la conversion del objeto a array del valor de orden de la tabla banners
    }
    public function ordena()
    {
        $base =Comites::where('estado', 1)->get();
        $ids =$base->where('estado', 1)->pluck('id');
      foreach ($ids as $key => $id) {
        $registro_Mod=$base->where('id',$id)->first();
        $registro_Mod->update(['orden' =>$key+1]);
      }
    }
    
}
