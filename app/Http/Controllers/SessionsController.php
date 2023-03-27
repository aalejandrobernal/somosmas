<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request){

        if($user = User::where('documento', $request->documento)
                        ->where('estado', '1')
                        ->first()){

            if ($user->password === sha1($request->password)) {
                Auth::login($user);
                return redirect()->to('inicio');
            }else{
                return back()->withErrors(['message' => 'El usuario y/o contraseña son incorrectos.']);
            }
        }else{
            return back()->withErrors(['message' => 'Usuario no encontrado, contacta al administrador.']);
        }
        
    }
       
        

   


    public function destroy()
    {
        auth()->logout();

        return redirect()->to('login');
    }

    
}
 