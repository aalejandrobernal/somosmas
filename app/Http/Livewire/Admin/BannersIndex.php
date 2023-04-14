<?php

namespace App\Http\Livewire\Admin;

use App\Models\Banner;
use Illuminate\Support\Facades\Log;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\BannerController;



class BannersIndex extends Component
{
    use WithFileUploads;
    public $imagen;
    public $banner;
    public $estado = 1;
    public $estado_nuevo = 1;
    public $nombre ;
    public $adjunto ;
    public $orde=[];
    
    protected $listeners = ['update','deshabilitar','delete'];
    protected $rules = [
    
        'nombre' => 'required',
        'imagen' => 'required|max:2048|image',
        'adjunto' => '',
    ];
    public function render()
    {
        $orden = Banner::where('estado','1')
        ->orderBy('orden', 'asc')
        ->get();
        $banners=Banner::where('estado',$this->estado)
        ->orderBy('orden', 'asc')
        ->get();
        return view('livewire.admin.banners-index', compact('banners','orden'));
    }
   
    public function create()
    {
        
        $this->validate();
        $image = $this->imagen;
        $avatarName = substr(uniqid(rand(), true), 8, 8) . '.' . $image->getClientOriginalExtension();
        $img = Image::make($image->getRealPath())->encode('jpg', 65)
            ->fit(1920, 400, function ($c) {
                $c->aspectRatio();
                $c->upsize();
        });
        $img->stream();
        // if($this->estado_nuevo==0){
        //     $orden=$this->estado_nuevo;
        // }else{
        //     $orden=$this->estado_nuevo;
        // }
        $banner =Banner::create([
            'ruta' =>$avatarName,
            'estado' => $this->estado_nuevo,
            'nombre' => $this->nombre,
            'adjunto' => $this->adjunto,
            'orden' => 0,
        ]);
        Storage::disk('local')->put('public/images/banners' . '/' . $avatarName, $img, 'public');
        $this->reset(['imagen','nombre','adjunto','estado_nuevo']);
        if($this->estado_nuevo==1){
            $obj_BannerController= new BannerController();
            $banner->update(['orden' => $obj_BannerController->ordenar_sin()]);
        }
        return view('livewire.admin.banners-index');
    }
    public function deshabilitar(Banner $banner)
    {
        $obj_BannerController= new BannerController();
        if ($banner->estado == 1){
            $banner->update(['estado' => '0','orden' => 0]);
            $obj_BannerController->ordena();
        }
        else{
            $banner->update(['estado' => '1','orden' => $obj_BannerController->ordenar_sin()]);
        }
    }
    public function delete(Banner $banner)
    {
        $banner->update(['estado' => '2']);
    }
}
