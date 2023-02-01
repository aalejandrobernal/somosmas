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

    public function store(Request $request)
    {

        $user = User::where('documento', $request->documento)->first();

        if ($user->password === sha1($request->password)) {
            Auth::login($user);

            return redirect()->to('inicio');
        }
        return back()->withErrors([
            'message' => 'La cédula no existe.'
        ]);
    }



    public function destroy()
    {
        auth()->logout();

        return redirect()->to('login');
    }

    
}
 