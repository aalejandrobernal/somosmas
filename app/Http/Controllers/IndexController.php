<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Content;
use App\Models\Formacion;
use App\Models\User;
use App\Models\Empresa;
use App\Models\Galeria;
use Illuminate\Support\Facades\Redirect;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;
use App\Models\Noticia;
use App\Models\Noticia_destacada;
use App\Models\Etapa;
use App\Models\Evidencia;
use Illuminate\Http\RedirectResponse;

use Genert\BBCode\BBCode;

use Carbon\Carbon;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Log\Logger;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

class IndexController extends Controller
{

    public function index1()
    {
       
        $id_noti_des = Noticia_destacada::where('id', '1')
        ->first()
        ->noticias_id;

        $noticia = Noticia::where('id', $id_noti_des)
        ->Limit('1')
        ->where('estado', '1')
        ->get();

       
        return view('inicio.index',compact('contenido','noticia',
         'formacion', 'listap', 'lista', 'formato1', 'formato', 'fecha_hoy', 'formatos'));
    }
    public function index()
    {
        return view('inicio.index');
    }
    public function inicioVue()
    {
        $banners = Banner::where('estado', '1')
        ->orderBy('orden', 'asc')
        ->get();
       return  response()->json($banners);
    }
    public function birthday()
    {
        $activos = User::join('empresas', 'empresas.id', '=', 'users.empresa_id')
        ->select('users.nombre as nombre',
         'empresas.nombre as empresa',
         'users.foto as foto',
         'users.cargo as cargo',
         'users.fecha_nacimiento',
         'users.fecha_ingreso',
         'users.fecha_ingreso as inicio')
        ->where('empresas.estado', '1')
        ->where('users.estado', '1')
        ->get();
        $now = date('m-d', time());
        $birthday = [];
        $anniversary = [];
        foreach ($activos as $cmp) {
            $data = [];
            $data2 = [];
            $bird = date('m-d', strtotime($cmp['fecha_nacimiento']));
            $anni = date('m-d', strtotime($cmp['fecha_ingreso']));
            if ($bird == $now) {
                $data["nombre"] = $cmp['nombre'];
                $data["foto"] = $cmp['foto'];
                $data["cargo"] = $cmp['cargo'];
                $data["empresa"] = $cmp['empresa'];
                array_push($birthday, $data);
            }
            if ($anni == $now ) {
                $data2["nombre"] = $cmp['nombre'];
                $data2["foto"] = $cmp['foto'];
                $data2["cargo"] = $cmp['cargo'];
                $data2["empresa"] = $cmp['empresa'];
                $x=$data2["ann"] = Carbon::now()->createFromDate($cmp['fecha_ingreso'])->age;
                if( $x > 0 ){
                     array_push($anniversary, $data2);
                };
            }
        }
        return response()->json([$birthday, $anniversary]);
    }

    public function noticia_des()
    {
        $id_noti_des = Noticia_destacada::where('id', '1')
        ->first()
        ->noticias_id;

        $noticia = Noticia::where('id', $id_noti_des)
        ->Limit('1')
        ->where('estado', '1')
        ->get();
        return response()->json($noticia);
    }
    public function formaciones_mes()
    {
        $formacion = Formacion::where('estado', '1')
        ->orderBy('orden', 'asc')
        ->get();
        return response()->json($formacion);
    }
    // public function cultura()
    // {
    //     return view('inicio.cultura');
    // }

    public function actividad()
    {
        return view('inicio.actividad');
    }

    public function noticia()
    {
        return view('inicio.noticia');
    }
    public function noticiaVue() // -------> Vue
    {
        $not = Noticia::where('estado', '1')
        ->orderBy('updated_at', 'desc')
        ->get();
        foreach ($not as $item ) {
            $item->fecha = Carbon::parse($item->updated_at)->toFormattedDateString();
        }

        return response()->json($not);
    }

    public function editar_perfil()
    {
        $empresas = DB::table('users')
            ->join('empresas', 'empresas.id', '=', 'users.empresa_id')
            ->select('empresas.nombre')
            ->where('users.documento', auth()->user()->documento)
            ->get();

        return view('inicio.editar_perfil', compact('empresas'));
    }

    public function cambio_foto()
    {
        return view('inicio.cambio_foto');
    }

    public function cambiocontrasena(Request $request) {

        $user           = Auth::user();
        $userId         = $user->id;
        $userPassword   = $user->password;

        $NewPass        = $request->password;
        $confirPass     = $request->confirm_password;
        $confirmActual  = sha1($request->password_actual);

        // Log::info("Entra a cambio contraseña");
        // Log::info("Usuario:" . $userPassword);php
        // Log::info($userEmpresa);

            //valida si la clave actual es la misma del usuario en sesión
            if ($confirmActual == $userPassword){

                //valida que la nueva contraseña 1 y 2 sean iguales
                if ($NewPass == $confirPass){

                    //valida que la clave no sea menor a 8 digitos
                    if(strlen($NewPass) >=8) {

                            $user->password = ($request->password);
                            $sqlBD = DB::table('users')
                            ->where('id', $user->id)
                            ->update(['password' => $user->password]);
                            return back()->withErrors(['cambio'=>'Tu clave ha sido cambiada exitosamente.']);

                    }else{
                        return back()->withErrors(['confirm_password'=>'Las claves nuevas deben tener mínimo 8 dígitos.']);
                    }
                }else{
                    return back()->withErrors(['confirm_password'=>'La claves nuevas no coinciden.']);
                }
            }else{
                return back()->withErrors(['password_actual'=>'La clave actual no coincide.']);
            }
    }

    public function cambiofoto(Request $request) {

        $user           = Auth::user();
        $userId         = $user->id;
        $userFoto       = $user->foto;
        $userDoc        = $user->documento;

        // Log::info($UserDoc);

        $request->validate([
            'foto' => "image|mimes:jpeg,jpg,png|max:150|"
        ]);

        if($request->hasfile('foto')){
            $destino = '../public/images/fotos/'.$userFoto;

            if(File::exists($destino)){
                File::delete($destino);
            }
            $archivo = $request->file('foto');
            $extension = $archivo ->getClientOriginalExtension();
            $nombrearchivo = $userDoc.'.'.$extension;
            $archivo->move('../public/images/fotos/', $nombrearchivo);
            $userFoto = $nombrearchivo;

            $sqlBD = DB::table('users')
            ->where('id', $userId)
            ->update(['foto' => $userFoto]);

            return back()->withErrors(['foto1'=>'Felicitaciones, tu foto ha sido cambiada exitosamente.']);
        }else{
            return back()->withErrors(['foto2'=>'No se ha seleccionado ningún archivo']);
        }

    }

    // public function cambiodatos(Request $request) {

    //     $user           = Auth::user();
    //     $userId         = $user->id;
    //     $userNombre     = $user->nombre;
    //     $userDoc        = $user->documento;
    //     $userNacimiento = $user->fecha_nacimiento;
    //     $userIngreso    = $user->fecha_ingreso;
    //     $userCargo      = $user->cargo;

    //     // Log::info($request);

    //     $user->nombre = $request->get('nombre');
    //     $user->documento = $request->get('documento');
    //     $user->fecha_nacimiento = $request->get('fecha_nacimiento');
    //     $user->fecha_ingreso = $request->get('fecha_ingreso');
    //     $user->save();

    //     return back()->withErrors(['fecha_ingreso'=>'Tus datos han sido actualizado correctamente']);
    // }

    public function galeria()
    {
        $galeria = Galeria::where('estado', '1')
        ->orderBy('updated_at', 'desc')
        ->get();

        $imagen = Galeria::where('estado', '1')
        ->select('imagenes')
        ->orderBy('updated_at', 'desc')
        ->get();

        $foto =[];
        foreach ($imagen as $imagenes)
        {
           $a=explode(",", $imagenes->imagenes);
           $b=$a[0];
           array_push($foto,$b);
        }

        return view('inicio.galeria', compact('galeria','foto'));
    }

    public function importUsers()
    {
        return view('inicio.import');
    }

    /*public function uploadUsers(Request $request)
    {
        $validatedData = $request->validate(
            [
                'file' => 'required',
            ]);
        try {
            $file = $request->file('file');
            (new UsersImport)->import($file, null, \Maatwebsite\Excel\Excel::XLSX);
            //dd('Row count: ' . $file->getRowCount());
            return Redirect::back()->withErrors(['msg' => 'Usuarios importado con éxito']);
        }
        catch(\Throwable $th){
            Log::error(
                "¡¡ERROR!!. Proceso de importación no completado. Error: "
                . $th->getMessage()
            );
            return Redirect::back()->with(
                'error', 'Error de importación. Contacte con el administador del sistema. '
                . $th->getMessage()
            );

        } 
    }*/
    public function userdata(Request $request) // -------> Vue
    {
        $user = Auth::user();
        return $user;
    }
    
    public function galeriaVue() // -------> Vue
    {
        $galeria = Galeria::where('estado', '1')
        ->orderBy('updated_at', 'desc')
        ->get();

        return $galeria;
    }

}
