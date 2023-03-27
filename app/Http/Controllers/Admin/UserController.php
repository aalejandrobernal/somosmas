<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Empresa;
use Illuminate\Http\Request;
use App\Models\User;
use Intervention\Image\Facades\Image;
use Spatie\Permission\Models\Role;

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
        $empresas=Empresa::pluck('nombre', 'id');
        $roles = Role::all();
        return view('admin.create',compact('roles','empresas'));
    }


    public function store(Request $request)
    {

        $request->validate([
            'documento'=>'required|unique:users',
            'nombre'=>'required',
            'fecha_nacimiento'=>'required',
            'fecha_ingreso'=>'required',
            'cargo'=>'required',
            'empresa_id'=>'required',
            'imagen'=>'image|required'
        ]);

         $nombre_img=$request->input('documento');
         $extension= $request->file('imagen')->getClientOriginalExtension();
         $nombre_foto=$nombre_img.'.'.$extension;

         $request->merge(['foto'=>$nombre_foto]);
         $request->merge(['password'=>$nombre_img]);
         Log::info($request->file('imagen'));

         Image::make($request->file('imagen'))
         ->resize(1000, null, function ($constraint) {
            $constraint->aspectRatio();
         })
         ->save('images\fotos/'.$nombre_foto);
        User::create($request->all());
        

        return redirect()->route('admin.users.index')->with('info','El colaborador se creó con exito');
    }
    public function edit(User $user)
    {
        $empresas=Empresa::pluck('nombre', 'id');
        $roles = Role::all();
        return view ('admin.edit',compact('user','roles','empresas'));
    }
    
    public function update(Request $request,User $user)
    {
        $request->validate([
            "documento'=>'required|unique:users,documento,$user->id",
            'nombre'=>'required',
            'fecha_nacimiento'=>'required',
            'fecha_ingreso'=>'required',
            'cargo'=>'required',
            'empresa_id'=>'required:',
            "imagen'=>'image:users,imagen,$user->id"
        ]);
        $user->roles()->sync($request->roles);
        $user->update($request->all());
        return redirect()->route('admin.users.edit',$user)->with('info','Los datos han sido actualizados');
    }


    public function restpassword(User $user)
    {
        $user->update(['password' => $user->documento]);
        return redirect()->route('admin.users.edit',$user)->with('info','Los datos han sido actualizados');
    }
}
