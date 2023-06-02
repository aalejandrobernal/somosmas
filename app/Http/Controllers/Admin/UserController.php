<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Empresa;
use Illuminate\Http\Request;
use App\Models\User;
use Intervention\Image\Facades\Image;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Storage;


use Illuminate\Support\Facades\Log;
use PhpParser\Node\Stmt\Return_;

 class UserController extends Controller
{

    public function index()
    {
        $users1= User::where('estado', '0')
        ->get();

        return view('admin.users',compact('users1'));
    }


    public function create()
    {
        $empresas=Empresa::where('estado', '1')
        ->get();
        $roles = Role::all();
        return view('admin.create',compact('roles','empresas'));
    }


    public function store(Request $request)
    {

        $request->validate([
            'documento'=>'required|unique:users',
            'nombre'=>'required|unique:users',
            'fecha_nacimiento'=>'required',
            'fecha_ingreso'=>'required',
            'cargo'=>'required',
            'empresa_id'=>'required',
            'imagen'=>'image'
        ]);

        $request->merge(['cargo'=>mb_strtoupper($request->cargo)]);
        $request->merge(['nombre'=>mb_strtoupper($request->nombre)]);
        $request->merge(['email'=>strtolower($request->email)]);
        $request->merge(['estado'=>1]);
        $request->merge(['password'=>$request->documento]);

        if($request->hasFile('imagen')){
            $nombre_img=$request->input('documento');
            $extension= $request->file('imagen')->getClientOriginalExtension();
            $nombre_foto=$nombre_img.'.'.$extension;
            $request->merge(['foto'=>$nombre_foto]);
            $request->merge(['password'=>$nombre_img]);
            $image = $request->file('imagen');
            $img = Image::make($image->getRealPath())->encode('jpg', 65)
            ->fit(591, 591,function ($c) {
                $c->aspectRatio();
                $c->upsize();
            });
            Storage::disk('local')->put('public/images/fotos' . '/' . $nombre_foto, $img, 'public');
        }
        $user=User::create($request->all());
        $user->roles()->sync($request->roles);
        return redirect()->route('admin.users.index')->with('info','El colaborador se creó con exito');
        

    }
    public function edit(User $user)
    {
        $empresas=Empresa::where('estado', '1')
        ->get();
        $roles = Role::all();
         return view ('admin.edit',compact('user','roles','empresas'));
        
    }
    
    public function update(Request $request,User $user)
    {
        $request->validate([
            "documento'=>'required|unique:users,documento,$user->id",
            "nombre'=>'required|unique:users,nombre,$user->id",
            'fecha_nacimiento'=>'required',
            'fecha_ingreso'=>'required',
            'cargo'=>'required',
            'empresa_id'=>'required:',
            "imagen'=>'image"
        ]);
        if($request->hasFile('imagen')){
            $nombre_img=$request->input('documento');
            $extension= $request->file('imagen')->getClientOriginalExtension();
            $nombre_foto=$nombre_img.'.'.$extension;
            $request->merge(['foto'=>$nombre_foto]);
            $request->merge(['password'=>$nombre_img]);
            $image = $request->file('imagen');
            $img = Image::make($image->getRealPath())->encode('jpg', 65)
            ->fit(591, 591,function ($c) {
                $c->aspectRatio();
                $c->upsize();
            });
            Storage::disk('local')->put('public/images/fotos' . '/' . $nombre_foto, $img, 'public');
        }
        $request->merge(['cargo'=>mb_strtoupper($request->cargo)]);
        $request->merge(['nombre'=>mb_strtoupper($request->nombre)]);
        $request->merge(['email'=>strtolower($request->email)]);
        
        $user->roles()->sync($request->roles);
        $user->update($request->all());

        return redirect()->route('admin.users.edit',$user)->with('info','Los datos han sido actualizados.');
    }


    public function restpassword(User $user)
    {
        $user->update(['password' => $user->documento]);
        return redirect()->route('admin.users.edit',$user)->with('info','La contraseña ha sido restablecida al número de cédula.');
    }
}
