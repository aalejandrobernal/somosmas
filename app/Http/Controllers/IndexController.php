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
use Illuminate\Http\RedirectResponse;

use Genert\BBCode\BBCode;


use Carbon\Carbon;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;


class IndexController extends Controller
{

    public function index()
    {
        $contenido = Banner::where('estado', '1')
        ->get();
       

        $id_noti_des = Noticia_destacada::where('id', '1')
        ->first()
        ->noticias_id;
                

        $noticia = Noticia::where('id', $id_noti_des)
        ->Limit('1')
        ->get();
         

        $card = Formacion::where('estado', '1')
            ->where('categoria_id', '3')
            ->where('nombre', 'card')
            ->where('orden', '1')
            ->get();
        

        $formacion = Formacion::where('estado', '1')
            ->where('categoria_id', '3')
            ->orderBy('created_at', 'desc')
            ->get();

       

        $now = Carbon::now();
        $currentDate = $now->toDateString();

        $cumple = User::join('empresas', 'empresas.id', '=', 'users.empresa_id')
            ->select('users.nombre as nombre',
            'empresas.nombre as empresa',
            'users.foto as foto',
            'users.cargo as cargo',
            'users.fecha_nacimiento')
            ->where('empresas.estado', '1')
            ->get();

        //Fecha Cumpleaños

        $lista = [];
        foreach ($cumple as $cmp) {
            $data = [];
            $convert = strtotime($cmp['fecha_nacimiento']);
            $formato1 = date('m-d', $convert);
            $now = date('m-d', time());

            if ($formato1 == $now) {
                $data["nombre"] = $cmp['nombre'];
                $data["foto"] = $cmp['foto'];
                $data["cargo"] = $cmp['cargo'];
                $data["empresa"] = $cmp['empresa'];
                array_push($lista, $data);
            }
        }

        //FECHA INICIO

        $fecha_ingreso = Carbon::now();


        $cumplep = User::join('empresas', 'empresas.id', '=', 'users.empresa_id')
            ->select('users.nombre as nombre',
             'empresas.nombre as empresa', 
             'users.foto as foto',
             'users.cargo as cargo', 
             'users.fecha_nacimiento', 
             'users.fecha_ingreso', 
             'users.fecha_ingreso as inicio')
            ->where('empresas.estado', '1')
            ->get();

        $listap = [];
        foreach ($cumplep as $cmp) {
            $data = [];
            $convert = strtotime($cmp['fecha_ingreso']);
            $formato = date('m-d', $convert);
            $fecha_ingreso = date('m-d', time());

            if ($formato == $fecha_ingreso) {
                $data["nombre"] = $cmp['nombre'];
                $data["foto"] = $cmp['foto'];
                $data["cargo"] = $cmp['cargo'];
                $data["empresa"] = $cmp['empresa'];
                $data["inicio"] = $cmp['inicio'];
                $data["ann"] = Carbon::now()->createFromDate($cmp['fecha_ingreso'])->age;
                array_push($listap, $data);
            }
        }

        $fecha_hoy = Carbon::now();
        $fecha_hoy = $fecha_hoy->format('m-d');

        $formatos = $formato == $formato1;


        return view('inicio.index',compact('contenido','noticia', 'card',
         'formacion', 'listap', 'lista', 'formato1', 'formato', 'fecha_hoy', 'formatos'));
    }

    public function cultura()
    {


        return view('inicio.cultura');
    }


    public function actividad()
    {
        return view('inicio.actividad');
    }

    public function portales()
    {

        $portal = Empresa::where('estado', '1')
            ->get();
        return view('inicio.portales', compact(('portal')));
    }

    public function noticia()
    {
        $not = Noticia::where('estado', '1')
        ->get();
        Log::info(gettype($not));
        return view('inicio.noticia', compact('not'));
    }

    public function contrasena()
    {
        return view('inicio.contrasena');
    }

    public function cambiocontrasena(Request $request) {
        $user           = Auth::user();
        $userId         = $user->id;
        $userPassword   = $user->password;
        
        $NewPass        = $request->password;
        $confirPass     = $request->confirm_password;
        $confirmActual  = sha1($request->password_actual); 

        // Log::info("Entra a cambio contraseña");
        // Log::info("Usuario:" . $userPassword);
        // Log::info("Ingreso actual:" . $confirmActual);

        // ($userPassword == $confirmActual) ?  Log::info("Las contraseñas coinciden") :  Log::info("La contraseña es diferente");           

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
                            return back()->withErrors(['cambio'=>'Felicitaciones, tu clave ha sido cambiada exitosamente.']);

                    }else{
                        return back()->withErrors(['confirm_password'=>'Por favor verifica: Las claves nuevas deben tener mínimo 8 dígitos.']);
                    }
                }else{
                    return back()->withErrors(['confirm_password'=>'Por favor verifica: La claves nuevas no coinciden.']);
                }
            }else{
                return back()->withErrors(['password_actual'=>'Por favor verifica: La clave actual no coincide.']);
            }
    }

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


    /*vistas portales */

    public function portalliwa()
    {
        return view('inicio.portalliwa');
    }



    public function portalsunco()
    {
        return view('inicio.portalsunco');
    }

    public function portalnavega()
    {
        return view('inicio.portalnavega');
    }

    public function portallibre()
    {
        return view('inicio.portallibre');
    }

    /*Vistas Liwa*/

    public function etapa5liwa()
    {
        return view('admin.etapa5');
    }
    public function etapa10liwa()
    {
        return view('admin.etapa10');
    }
    public function etapa15liwa()
    {
        return view('admin.etapa15');
    }
    public function etapa20liwa()
    {
        return view('admin.etapa20');
    }

    /*vistas portal navega */

    public function etapa5navega()
    {
        return view('admin.etapa5n');
    }
    public function etapa10navega()
    {
        return view('admin.etapa10n');
    }
    public function etapa15navega()
    {
        return view('admin.etapa15n');
    }
    public function etapa20navega()
    {
        return view('admin.etapa20n');
    }

    /*vistas portal Libre */

    public function etapa5libre()
    {
        return view('admin.etapa5l');
    }
    public function etapa10libre()
    {
        return view('admin.etapa10l');
    }
    public function etapa15libre()
    {
        return view('admin.etapa15l');
    }
    public function etapa20libre()
    {
        return view('admin.etapa20l');
    }

    /*vistas portal SuncoEnergy */

    public function etapa5sunco()
    {
        return view('admin.etapa5s');
    }
    public function etapa10sunco()
    {
        return view('admin.etapa10s');
    }
    public function etapa15sunco()
    {
        return view('admin.etapa15s');
    }
    public function etapa20sunco()
    {
        return view('admin.etapa20s');
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

}
    