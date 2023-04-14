<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use PhpParser\Node\Stmt\Return_;

class BannerController extends Controller
{

    public $base ;
    
    public function index()
    {
        return view('admin.banners.banner-index');
    }
    
    public function update(Request $request,Banner $banner)
    {
        $request->validate([
            'nombre'.$banner->id=>'required',
            'imagen'.$banner->id=>'image|max:2048',
        ]);
        if($request->hasFile('imagen'.$banner->id)){
            $image = $request->file('imagen'.$banner->id);
            $avatarName = substr(uniqid(rand(), true), 8, 8) . '.' . $image->getClientOriginalExtension();
            $img = Image::make($image->getRealPath())->encode('jpg', 65)
                ->fit(1920, 400, function ($c) {
                    $c->aspectRatio();
                    $c->upsize();
            });
            $request->merge(['ruta'=>$avatarName]);
            $img->stream();
            Storage::disk('local')->put('public/images/banners' . '/' . $avatarName, $img, 'public');
        }
        $request->merge(['nombre'=>request('nombre'.$banner->id)]);
        $request->merge(['adjunto'=>request('adjunto'.$banner->id)]);
        $banner->update($request->all());
        if(($request->input('orden_'.$banner->id))!=$banner->orden){
            $this->ordenar($request->input('orden_'.$banner->id),$banner->id);
        }
        return redirect()->route('admin.banners.index')->with('info','Los datos han sido actualizados.');
    }

    public function ordenar($select,$id_banner)
    {
        $base =Banner::where('estado', 1)->get();
        $registro_Mod=$base->where('id',$id_banner)->first();
        $registro_orden=$base->where('id',$id_banner)->pluck('orden')->first();
        $registro_Mod->update(['orden' =>$select]);
        foreach ($base as $key => $registro) {
            if($registro->orden==$select && $registro->id!=$id_banner){
                 $registro->update(['orden' =>$registro_orden]);
            }
          }
    }
    public function ordena()
    {
        $base =Banner::where('estado', 1)->get();
        $ids =$base->where('estado', 1)->pluck('id');
      foreach ($ids as $key => $id) {
        $registro_Mod=$base->where('id',$id)->first();
        $registro_Mod->update(['orden' =>$key+1]);
      }
    }

    public function ordenar_sin()
    {   
        return max(json_decode(json_encode(Banner::pluck('orden')), true))+1;
        //le suma 1 al valor maximo de la conversion del objeto a array del valor de orden de la tabla banners
    }

}
