<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;
use App\Models\Etapa;
use App\Models\Evidencia;
use App\Models\Objetivo;
use Illuminate\Support\Facades\Log;

class PortalController extends Controller
{
    public function index(){
        $etapas = Etapa::orderBy('grupo', 'asc')->get();
        $objetivos = Objetivo::all();
        $evidencias = Evidencia::orderBy('etapa_id', 'asc')->get();
        // dd($evidencias[0]->nombre);
        return view('admin.index', [
            'etapas' => $etapas,
            'objetivos' => $objetivos,
            'evidencias' => $evidencias
        ]);
    }

    public function navega() {
        $etapas = Etapa::orderBy('grupo', 'asc')->get();
        $objetivos = Objetivo::all();
        $evidencias = Evidencia::orderBy('etapa_id', 'asc')->get();
        return view ('admin.navega',[
            'etapas' => $etapas,
            'objetivos' => $objetivos,
            'evidencias' => $evidencias
        ]);
    }

    public function libre() {
        $etapas = Etapa::orderBy('grupo', 'asc')->get();
        $objetivos = Objetivo::all();
        $evidencias = Evidencia::orderBy('etapa_id', 'asc')->get();
        return view ('admin.libre', [
            'etapas' => $etapas,
            'objetivos' => $objetivos,
            'evidencias' => $evidencias
        ]);
    }

    public function sunco() {
        $etapas = Etapa::orderBy('grupo', 'asc')->get();
        $objetivos = Objetivo::all();
        $evidencias = Evidencia::orderBy('etapa_id', 'asc')->get();
        return view ('admin.sunco', [
            'etapas' => $etapas,
            'objetivos' => $objetivos,
            'evidencias' => $evidencias
        ]);
    }
    public function portales()
    {
        $portal = Empresa::where('estado', '1')
            ->get();
        return view('inicio.portales', compact(('portal')));
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
         $etapas = Etapa::orderBy('grupo', 'asc')->orderby('id','asc')->get();
         $evidencias = Evidencia::orderBy('etapa_id', 'asc')->get();
         return view ('admin.etapa5',[
             'etapas' => $etapas,
             'evidencias' => $evidencias
         ]);
     }

     public function etapa10liwa()
     {
         $etapas = Etapa::orderBy('grupo', 'asc')->orderby('id','asc')->get();
         $evidencias = Evidencia::orderBy('etapa_id', 'asc')->get();
         return view('admin.etapa10', [
             'etapas' => $etapas,
             'evidencias' => $evidencias
         ]);
     }
     public function etapa15liwa()
     {
         $etapas = Etapa::orderBy('grupo', 'asc')->orderby('id','asc')->get();
         $evidencias = Evidencia::orderBy('etapa_id', 'asc')->get();
         return view('admin.etapa15', [
             'etapas' => $etapas,
             'evidencias' => $evidencias
         ]);
     }
     public function etapa20liwa()
     {
         $etapas = Etapa::orderBy('grupo', 'asc')->orderby('id','asc')->get();
         $evidencias = Evidencia::orderBy('etapa_id', 'asc')->get();
         return view('admin.etapa20', [
             'etapas' => $etapas,
             'evidencias' => $evidencias
         ]);
     }

     /*vistas portal navega */

     public function etapa5navega()
     {
         $etapas = Etapa::orderBy('grupo', 'asc')->orderby('id','asc')->get();
         $evidencias = Evidencia::orderBy('etapa_id', 'asc')->get();
         return view('admin.etapa5n', [
             'etapas' => $etapas,
             'evidencias' => $evidencias
         ]);
     }
     public function etapa10navega()
     {
         $etapas = Etapa::orderBy('grupo', 'asc')->orderby('id','asc')->get();
         $evidencias = Evidencia::orderBy('etapa_id', 'asc')->get();
         return view('admin.etapa10n', [
             'etapas' => $etapas,
             'evidencias' => $evidencias
         ]);
     }
     public function etapa15navega()
     {
         $etapas = Etapa::orderBy('grupo', 'asc')->orderby('id','asc')->get();
         $evidencias = Evidencia::orderBy('etapa_id', 'asc')->get();
         return view('admin.etapa15n', [
             'etapas' => $etapas,
             'evidencias' => $evidencias
         ]);
     }
     public function etapa20navega()
     {
         $etapas = Etapa::orderBy('grupo', 'asc')->orderby('id','asc')->get();
         $evidencias = Evidencia::orderBy('etapa_id', 'asc')->get();
         return view('admin.etapa20n', [
             'etapas' => $etapas,
             'evidencias' => $evidencias
         ]);
     }

     /*vistas portal Libre */

     public function etapa5libre()
     {
         $etapas = Etapa::orderBy('grupo', 'asc')->orderby('id','asc')->get();
         $evidencias = Evidencia::orderBy('etapa_id', 'asc')->get();
         return view('admin.etapa5l', [
             'etapas' => $etapas,
             'evidencias' => $evidencias
         ]);
     }
     public function etapa10libre()
     {
         $etapas = Etapa::orderBy('grupo', 'asc')->orderby('id','asc')->get();
         $evidencias = Evidencia::orderBy('etapa_id', 'asc')->get();
         return view('admin.etapa10l', [
             'etapas' => $etapas,
             'evidencias' => $evidencias
         ]);
     }
     public function etapa15libre()
     {
         $etapas = Etapa::orderBy('grupo', 'asc')->orderby('id','asc')->get();
         $evidencias = Evidencia::orderBy('etapa_id', 'asc')->get();
         return view('admin.etapa15l', [
             'etapas' => $etapas,
             'evidencias' => $evidencias
         ]);
     }
     public function etapa20libre()
     {
         $etapas = Etapa::orderBy('grupo', 'asc')->orderby('id','asc')->get();
         $evidencias = Evidencia::orderBy('etapa_id', 'asc')->get();
         return view('admin.etapa20l', [
             'etapas' => $etapas,
             'evidencias' => $evidencias
         ]);
     }

     /*vistas portal SuncoEnergy */

     public function etapa5sunco()
     {
         $etapas = Etapa::orderBy('grupo', 'asc')->orderby('id','asc')->get();
         $evidencias = Evidencia::orderBy('etapa_id', 'asc')->get();
         return view('admin.etapa5s', [
             'etapas' => $etapas,
             'evidencias' => $evidencias
         ]);
     }
     public function etapa10sunco()
     {
         $etapas = Etapa::orderBy('grupo', 'asc')->orderby('id','asc')->get();
         $evidencias = Evidencia::orderBy('etapa_id', 'asc')->get();
         return view('admin.etapa10s', [
             'etapas' => $etapas,
             'evidencias' => $evidencias
         ]);
     }
     public function etapa15sunco()
     {
         $etapas = Etapa::orderBy('grupo', 'asc')->orderby('id','asc')->get();
         $evidencias = Evidencia::orderBy('etapa_id', 'asc')->get();
         return view('admin.etapa15s', [
             'etapas' => $etapas,
             'evidencias' => $evidencias
         ]);
     }
     public function etapa20sunco()
     {
         $etapas = Etapa::orderBy('grupo', 'asc')->orderby('id','asc')->get();
         $evidencias = Evidencia::orderBy('etapa_id', 'asc')->get();
         return view('admin.etapa20s', [
             'etapas' => $etapas,
             'evidencias' => $evidencias
         ]);
     }

     public function portalObjetivos(){

        $objetivos = Objetivo::all();

        return $objetivos;
    }

    public function portalEtapas() {

        $etapas = Etapa::all();
        $evidencias = Evidencia::orderBy('etapa_id', 'asc')->get();

        foreach ($etapas as $etapa) {
            $lista = array();
            foreach ($evidencias as $evidencia) {
                if ($etapa['id'] == $evidencia['etapa_id']) {
                    array_push($lista, $evidencia);
                }
            }
            $etapa['evidencias'] = $lista;
        }
        return $etapas;
    }

    public function portalEvidencias(){

        $evidencias = Evidencia::orderBy('etapa_id', 'asc')->get();

        return $evidencias;
    }
}
