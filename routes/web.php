<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\RegistroLiwa;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GestorAdmin;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\NewController;
// Route::get('/', function () {
//     return view('home');
// })->middleware('auth');

Route::get('/', [HomeController::class, 'home'])
        -> name('home');

// Route::get('/register', [RegisterController::class, 'create'])
//         -> name('register.index');

// Route::post('/register', [RegisterController::class, 'store'])
//         -> name('register.store');

//Interfaz Login

Route::get('/login', [SessionsController::class, 'create'])
        -> name('login.index')
        ->middleware('guest');

Route::post('/login', [SessionsController::class, 'store'])
        -> name('login.store');

Route::get('/logut', [SessionsController::class, 'destroy'])
        -> name('login.destroy');



//permisos

Route::get('inicio/portales/portal-liwa', [AdminController::class, 'index'])
->middleware('auth.admin1')
-> name('admin.index');

Route::get('inicio/portales/portal-sunco', [AdminController::class, 'sunco'])
->middleware('auth.admin2')
-> name('admin.sunco');

Route::get('inicio/portales/portal-libre', [AdminController::class, 'libre'])
->middleware('auth.admin3')
-> name('admin.libre');

Route::get('inicio/portales/portal-navega', [AdminController::class, 'navega'])
->middleware('auth.admin4')
-> name('admin.navega');




//Interfaz Admin

Route::get('admin', [GestorAdmin::class, 'index'])
    ->middleware('can:admin')
    -> name('admin');

//Interfaz Admin Usuarios

Route::resource('admin/users',UserController::class)
    ->only('index','edit','create','store','update','show')
    ->middleware('can:admin')
    ->names('admin.users');

Route::put('admin/{user}/edit', [UserController::class, 'restpassword'])
    ->middleware('can:admin')
    ->name('admin.users.restpassword');
    
Route::put('admin/user/{user}/edit', [UserController::class, 'delete'])
    ->middleware('can:admin')
    ->name('admin.users.delete');

//Interfaz Admin Noticias

Route::resource('admin/news',NewController::class)
    ->only('index','edit','create','store','update','show')
    ->middleware('can:admin')
    ->names('admin.news');

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

Route::get('inicio/editar_perfil', [IndexController::class, 'editar_perfil'])
    ->middleware('auth')
    ->name('inicio.editar_perfil');

Route::get('inicio/cambio_foto', [IndexController::class, 'cambio_foto'])
    ->middleware('auth')
    ->name('inicio.cambio_foto');

Route::post('inicio/cambiocontrasena', [IndexController::class, 'cambiocontrasena'])
    ->middleware('auth')
    ->name('inicio.cambiocontrasena'); 
    
Route::get('inicio/galeria', [IndexController::class, 'galeria'])
    ->middleware('auth')
    ->name('inicio.galeria');

Route::put('inicio/update-foto', [IndexController::class, 'cambiofoto'])
    ->middleware('auth')
    ->name('inicio.update-foto');

// Vistas Portal Liwa

Route::get('inicio/portales/portal-liwa/etapa5', [IndexController::class, 'etapa5liwa'])
->middleware('auth.admin1') 
->name('admin.etapa5liwa');

Route::get('inicio/portales/portal-liwa/etapa10', [IndexController::class, 'etapa10liwa'])
->middleware('auth.admin1')
->name('admin.etapa10liwa');

Route::get('inicio/portales/portal-liwa/etapa15', [IndexController::class, 'etapa15liwa'])
->middleware('auth.admin1')
->name('admin.etapa15liwa');

Route::get('inicio/portales/portal-liwa/etapa20', [IndexController::class, 'etapa20liwa'])
->middleware('auth.admin1')
->name('admin.etapa20liwa');

// Vistas Portal Sunco

Route::get('inicio/portales/portal-sunco/etapa5s', [IndexController::class, 'etapa5sunco'])
->middleware('auth.admin2')
->name('admin.etapa5sunco');

Route::get('inicio/portales/portal-sunco/etapa10s', [IndexController::class, 'etapa10sunco'])
->middleware('auth.admin2')
->name('admin.etapa10sunco');

Route::get('inicio/portales/portal-sunco/etapa15s', [IndexController::class, 'etapa15sunco'])
->middleware('auth.admin2')
->name('admin.etapa15sunco');

Route::get('inicio/portales/portal-sunco/etapa20s', [IndexController::class, 'etapa20sunco'])
->middleware('auth.admin2')
->name('admin.etapa20sunco');

// Vistas Portal libre

Route::get('inicio/portales/portal-libre/etapa5l', [IndexController::class, 'etapa5libre'])
->middleware('auth.admin3')
->name('admin.etapa5libre');

Route::get('inicio/portales/portal-libre/etapa10l', [IndexController::class, 'etapa10libre'])
->middleware('auth.admin3')
->name('admin.etapa10libre');

Route::get('inicio/portales/portal-libre/etapa15l', [IndexController::class, 'etapa15libre'])
->middleware('auth.admin3')
->name('admin.etapa15libre');

Route::get('inicio/portales/portal-libre/etapa20l', [IndexController::class, 'etapa20libre'])
->middleware('auth.admin3')
->name('admin.etapa20libre');


// Vistas Portal navega

Route::get('inicio/portales/portal-navega/etapa5n', [IndexController::class, 'etapa5navega'])
->middleware('auth.admin4')
->name('admin.etapa5navega');

Route::get('inicio/portales/portal-navega/etapa10n', [IndexController::class, 'etapa10navega'])
->middleware('auth.admin4')
->name('admin.etapa10navega');

Route::get('inicio/portales/portal-navega/etapa15n', [IndexController::class, 'etapa15navega'])
->middleware('auth.admin4')
->name('admin.etapa15navega');

Route::get('inicio/portales/portal-navega/etapa20n', [IndexController::class, 'etapa20navega'])
->middleware('auth.admin4')
->name('admin.etapa20navega');


