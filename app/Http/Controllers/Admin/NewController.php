<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Noticia;
use App\Http\Requests\StoreNewRequest;
use Intervention\Image\Facades\Image;
class NewController extends Controller
{

    public function index()
    {
        return view('admin.news.index');
    }
    public function create()
    {
        return view('admin.news.create');
    }
    public function store(StoreNewRequest $request)
    {
        

        $imagenes=$request->input('titulo');
       

        // Image::make($request->file('imagenes'))
        //  ->resize(1000, null, function ($constraint) {
        //     $constraint->aspectRatio();
        // })
        // ->save('images\ensayo/'.$nombre_foto);

        // return $request->all();
        // Noticia::create([
        //         'titulo' => $request->input('titulo'),
        //         'contenido' => $request->input('contenido'),
        //         'adjunto' => $request->input('adjunto'),
        //         'estado' => $request->input('estado'),
        //     ]);
        // $new=Noticia::create($request->all());
        // return $request->all();

        // return redirect()->route('admin.news.edit',$new)->with('info','Los datos han sido actualizados');
    }


    public function show($id)
    {
        //
    }


    public function edit(Noticia $news)
    {
        return view('admin.news.edit',compact('news'));
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
