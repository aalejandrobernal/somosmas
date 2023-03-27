<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etapa;
use App\Models\Objetivo;
use App\Models\Evidencia;

class AdminController extends Controller
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
}
