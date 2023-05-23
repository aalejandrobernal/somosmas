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
use Intervention\Image\Facades\Image;

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
use Mockery\Generator\StringManipulation\Pass\Pass;

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

    public function ditar_perfil()
    {
        $empresas = DB::table('users')
            ->join('empresas', 'empresas.id', '=', 'users.empresa_id')
            ->select('empresas.nombre')
            ->where('users.documento', auth()->user()->documento)
            ->get();

        return view('inicio.editar_perfil', compact('empresas'));
    }
    public function editar_perfil()
    {
        $empresas = DB::table('users')
            ->where('users.documento', auth()->user()->documento)
            ->get();
            
           
        return response()->json($empresas);
    }

    public function cambio_foto()
    {
        return view('inicio.cambio_foto');
    }

    public function cambiocontrasena(Request $request) {
        
         if(Auth::user()->password==$request->password){
            // log::info($request);
            // Log::info(Auth::user()->password);
            $result= DB::table('users')
            ->where('id', $request->id)
            ->update(['password' => $request->new_password]);
            Log::info($result);
        }else{
            return 'La clave actual no coincide con la ingresada.';
         }           
    }

    public function cambiofoto(Request $request) {
        
        $user           = Auth::user();
        $request->validate([
            'file' => "image|mimes:jpeg,jpg,png"
        ]);
        if($request->hasFile('file')){
            $nombre_img=$user->documento;
            $extension= $request->file('file')->getClientOriginalExtension();
            $nombre_foto=$nombre_img.'.'.$extension;
            Log::info($nombre_foto);
            DB::table('users')
                ->where('id', $user->id)
                ->update(['foto' => $nombre_foto]);
            Image::make($request->file('file'))
            ->resize(1000, null, function ($constraint) {
                $constraint->aspectRatio();
            })
            ->save('images\fotos/'.$nombre_foto);
         }
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
