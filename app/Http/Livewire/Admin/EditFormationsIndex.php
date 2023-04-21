<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Formacion;
use Illuminate\Support\Facades\Log;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use App\Http\livewire\Admin\FormationsIndex;

class EditFormationsIndex extends Component
{
    use WithFileUploads;
    public $imagen;
    public $form;
    public $orden,$cuerpo,$titulo,$adjunto;
    protected $rules = [
        'form.orden' => 'required',
        'form.titulo' => 'required',
        'form.cuerpo' => 'required',
        'form.imagen' => 'required',
        'form.adjunto' => 'required',
    ];
    public function mount(Formacion $form)
    {

        $this->form = $form;

        $this->orden = Formacion::where('estado',1)
        ->orderBy('orden', 'asc')
        ->get();
    }
    public function render()
    {
        return view('livewire.admin.edit-formations-index');
    }
    public function update()
    {
        $this->validate();
        if($this->imagen){
            $image =$this->imagen;
            $avatarName = substr(uniqid(rand(), true), 8, 8) . '.' . $image->getClientOriginalExtension();
            $img = Image::make($image->getRealPath())->encode('jpg', 65)
                ->fit(800,533, function ($c) {
                $c->aspectRatio();
                $c->upsize();
            });
                $img->stream();
                $this->form->update([
                    'imagen' => $avatarName,
                ]);
                Storage::disk('local')->put('public/images/formaciones' . '/' . $avatarName, $img, 'public');
        }
        if($this->form->orden!=Formacion::whereId($this->form->id)->value('orden'))
        {
            $this->ordenar($this->form->orden,$this->form->id);
        }
        $this->emitTo('admin.formations-index','render');
        $this->form->save();
        $this->dispatchBrowserEvent('close-modal');
        $this->reset(['imagen','titulo','adjunto','cuerpo']);
        return view('livewire.admin.banners-index');
        
    }
    public function ordenar($select,$id_banner)
    {
        $base =Formacion::where('estado', 1)->get();
        $registro_Mod=$base->where('id',$id_banner)->first();
        $registro_orden=$base->where('id',$id_banner)->pluck('orden')->first();
        $registro_Mod->update(['orden' =>$select]);
        foreach ($base as $key => $registro) {
            if($registro->orden==$select && $registro->id!=$id_banner){
                 $registro->update(['orden' =>$registro_orden]);
            }
          }
        
    }
}
