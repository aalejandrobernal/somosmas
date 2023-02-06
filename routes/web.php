<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\RegistroLiwa;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('home');
// })->middleware('auth');

Route::get('/', [HomeController::class, 'home'])
        -> name('home');

Route::get('/register', [RegisterController::class, 'create'])
        -> name('register.index');

Route::post('/register', [RegisterController::class, 'store'])
        -> name('register.store');


//Interfaz Login

Route::get('/login', [SessionsController::class, 'create'])
        -> name('login.index');

Route::post('/login', [SessionsController::class, 'store'])
        -> name('login.store');

Route::get('/logut', [SessionsController::class, 'destroy'])
        -> name('login.destroy');

//permisos



Route::get('inicio/portales/portal-liwa', [AdminController::class, 'index'])
->middleware('auth.admin')
-> name('admin.index');

Route::get('inicio/portales/portal-sunco', [AdminController::class, 'sunco'])
->middleware('auth.admin1')
-> name('admin.sunco');

Route::get('inicio/portales/portal-libre', [AdminController::class, 'libre'])
->middleware('auth.admin2')
-> name('admin.libre');

Route::get('inicio/portales/portal-navega', [AdminController::class, 'navega'])
->middleware('auth.admin3')
-> name('admin.navega');











//Interfaz De Inicio

Route::get('inicio', [IndexController::class, 'index'])
    ->middleware('auth')
    ->name('inicio.index');

Route::get('inicio/cultura', [IndexController::class, 'cultura'])
    ->middleware('auth')
    ->name('inicio.cultura');

Route::get('inicio/red-de-apoyo', [IndexController::class, 'red'])
    ->middleware('auth')
    ->name('inicio.red');

Route::get('inicio/actividad', [IndexController::class, 'actividad'])
    ->middleware('auth')
    ->name('inicio.actividad');

Route::get('inicio/portales', [IndexController::class, 'portales'])
    ->middleware('auth')
    ->name('inicio.portales');

Route::get('inicio/noticia', [IndexController::class, 'noticia'])
    ->middleware('auth')
    ->name('inicio.noticia');
    
Route::get('inicio/import-users', [IndexController::class, 'importUsers'])
    ->middleware('auth')
    ->name('inicio.import');

Route::post('inicio/import-users', [IndexController::class, 'uploadUsers'])
    ->middleware('auth')
    ->name('inicio.import');

Route::get('inicio/contrasena', [IndexController::class, 'contrasena'])
    ->middleware('auth')
    ->name('inicio.contrasena');

Route::post('inicio/cambiocontrasena', [IndexController::class, 'cambiocontrasena'])
    ->middleware('auth')
    ->name('inicio.cambiocontrasena');
    
Route::get('inicio/galeria', [IndexController::class, 'galeria'])
->middleware('auth')
->name('inicio.galeria');




// Vistas Portal Liwa

Route::get('inicio/portales/portal-liwa/etapa5', [IndexController::class, 'etapa5liwa'])
->middleware('auth.admin')
->name('admin.etapa5liwa');

Route::get('inicio/portales/portal-liwa/etapa10', [IndexController::class, 'etapa10liwa'])
->middleware('auth.admin')
->name('admin.etapa10liwa');

Route::get('inicio/portales/portal-liwa/etapa15', [IndexController::class, 'etapa15liwa'])
->middleware('auth.admin')
->name('admin.etapa15liwa');

Route::get('inicio/portales/portal-liwa/etapa20', [IndexController::class, 'etapa20liwa'])
->middleware('auth.admin')
->name('admin.etapa20liwa');

// Vistas Portal navega

Route::get('inicio/portales/portal-navega/etapa5n', [IndexController::class, 'etapa5navega'])
->middleware('auth.admin1')
->name('admin.etapa5navega');

Route::get('inicio/portales/portal-navega/etapa10n', [IndexController::class, 'etapa10navega'])
->middleware('auth.admin1')
->name('admin.etapa10navega');

Route::get('inicio/portales/portal-navega/etapa15n', [IndexController::class, 'etapa15navega'])
->middleware('auth.admin1')
->name('admin.etapa15navega');

Route::get('inicio/portales/portal-navega/etapa20n', [IndexController::class, 'etapa20navega'])
->middleware('auth.admin1')
->name('admin.etapa20navega');

// Vistas Portal libre

Route::get('inicio/portales/portal-libre/etapa5l', [IndexController::class, 'etapa5libre'])
->middleware('auth.admin2')
->name('admin.etapa5libre');

Route::get('inicio/portales/portal-libre/etapa10l', [IndexController::class, 'etapa10libre'])
->middleware('auth.admin2')
->name('admin.etapa10libre');

Route::get('inicio/portales/portal-libre/etapa15l', [IndexController::class, 'etapa15libre'])
->middleware('auth.admin2')
->name('admin.etapa15libre');

Route::get('inicio/portales/portal-libre/etapa20l', [IndexController::class, 'etapa20libre'])
->middleware('auth.admin2')
->name('admin.etapa20libre');

// Vistas Portal Sunco

Route::get('inicio/portales/portal-sunco/etapa5s', [IndexController::class, 'etapa5sunco'])
->middleware('auth.admin3')
->name('admin.etapa5sunco');

Route::get('inicio/portales/portal-sunco/etapa10s', [IndexController::class, 'etapa10sunco'])
->middleware('auth.admin3')
->name('admin.etapa10sunco');

Route::get('inicio/portales/portal-sunco/etapa15s', [IndexController::class, 'etapa15sunco'])
->middleware('auth.admin3')
->name('admin.etapa15sunco');

Route::get('inicio/portales/portal-sunco/etapa20s', [IndexController::class, 'etapa20sunco'])
->middleware('auth.admin3')
->name('admin.etapa20sunco');


