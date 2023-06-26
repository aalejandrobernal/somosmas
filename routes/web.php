<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\RegistroLiwa;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GestorAdmin;
use App\Http\Controllers\PortalController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\NewController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\FormationsController;
use App\Http\Controllers\Admin\InductionsController;
use App\Http\Controllers\Admin\CommitteesController;
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

Route::get('inicio/portales/portal-liwa', [PortalController::class, 'index'])
->middleware('auth.admin1')
-> name('admin.index');

Route::get('inicio/portales/portal-sunco', [PortalController::class, 'sunco'])
->middleware('auth.admin2')
-> name('admin.sunco');

Route::get('inicio/portales/portal-libre', [PortalController::class, 'libre'])
->middleware('auth.admin3')
-> name('admin.libre');

Route::get('inicio/portales/portal-navega', [PortalController::class, 'navega'])
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
    ->only('index','edit','create')
    ->middleware('can:admin')
    ->names('admin.news');

//Interfaz Admin Banners

Route::resource('admin/banners',BannerController::class)
->only('index','edit','create','store','update','show')
->middleware('can:admin')
->names('admin.banners');

//Interfaz Admin Formaciones

Route::resource('admin/formations',FormationsController::class)
->only('index')
->middleware('can:admin')
->names('admin.formations');

//Interfaz Admin Inducciones

Route::resource('admin/inductions',InductionsController::class)
->only('index')
->middleware('can:admin')
->names('admin.inductions');

//Interfaz Admin Comites

Route::resource('admin/committees',CommitteesController::class)
->only('index')
->middleware('can:admin')
->names('admin.committees');


//Interfaz De Inicio

Route::get('/', [IndexController::class, 'index'])
    ->middleware('auth')
    ->name('inicio.index');

Route::get('inicioVue', [IndexController::class, 'inicioVue'])// ---------> VISTA Vue inicio
    ->middleware('auth')
    ->name('inicioVue');

Route::get('birthdayVue', [IndexController::class, 'birthday'])// ---------> VISTA Vue inicio
    ->middleware('auth')
    ->name('birthdayVue');

Route::get('noticia_des_Vue', [IndexController::class, 'noticia_des'])// ---------> VISTA Vue inicio
    ->middleware('auth')
    ->name('noticia_des_Vue');

Route::get('formacion_mes_Vue', [IndexController::class, 'formaciones_mes'])// ---------> VISTA Vue inicio
    ->middleware('auth')
    ->name('formacion_mes_Vue');

Route::get('inductions', [IndexController::class, 'inducciones'])// ---------> VISTA Vue inicio
    ->middleware('auth')
    ->name('inducciones_Vue');

Route::get('committees', [IndexController::class, 'committees'])// ---------> VISTA Vue inicio
    ->middleware('auth')
    ->name('inducciones_Vue');

// Route::get('inicio/cultura', [IndexController::class, 'cultura'])
//     ->middleware('auth')
//     ->name('inicio.cultura');

// Route::get('inicio/red-de-apoyo', [IndexController::class, 'red'])
//     ->middleware('auth')
//     ->name('inicio.red');

// Route::get('/actividad', [IndexController::class, 'actividad'])
//     ->middleware('auth')
//     ->name('inicio.actividad');

// Route::get('inicio/portales', [PortalController::class, 'portales'])
//     ->middleware('auth')
//     ->name('inicio.portales');

// Route::get('inicio/noticia', [IndexController::class, 'noticia'])
//     ->middleware('auth')
//     ->name('inicio.noticia');

Route::get('noticiaVue', [IndexController::class, 'noticiaVue'])// ---------> VISTA Vue
    ->middleware('auth')
    ->name('noticiaVue');

Route::get('inicio/import-users', [IndexController::class, 'importUsers'])
    ->middleware('auth')
    ->name('inicio.import');

Route::post('inicio/import-users', [IndexController::class, 'uploadUsers'])
    ->middleware('auth')
    ->name('inicio.import');

Route::get('editar_perfil', [IndexController::class, 'editar_perfil'])
    ->middleware('auth')
    ->name('inicio.editar_perfil');

Route::post('cambio_foto', [IndexController::class, 'cambio_foto'])
    ->middleware('auth')
    ->name('cambio_foto');

Route::post('cambiocontrasena', [IndexController::class, 'cambiocontrasena'])
    ->middleware('auth')
    ->name('inicio.cambiocontrasena');

// Route::get('inicio/galeria', [IndexController::class, 'galeria'])
//     ->middleware('auth')
//     ->name('inicio.galeria');

Route::post('update-foto', [IndexController::class, 'cambiofoto'])
    ->middleware('auth')
    ->name('inicio.update-foto');

// Vistas Portal Liwa

Route::get('inicio/portales/portal-liwa/etapa5', [PortalController::class, 'etapa5liwa'])
->middleware('auth.admin1')
->name('admin.etapa5liwa');

Route::get('inicio/portales/portal-liwa/etapa10', [PortalController::class, 'etapa10liwa'])
->middleware('auth.admin1')
->name('admin.etapa10liwa');

Route::get('inicio/portales/portal-liwa/etapa15', [PortalController::class, 'etapa15liwa'])
->middleware('auth.admin1')
->name('admin.etapa15liwa');

Route::get('inicio/portales/portal-liwa/etapa20', [PortalController::class, 'etapa20liwa'])
->middleware('auth.admin1')
->name('admin.etapa20liwa');

// Vistas Portal Sunco

Route::get('inicio/portales/portal-sunco/etapa5s', [PortalController::class, 'etapa5sunco'])
->middleware('auth.admin2')
->name('admin.etapa5sunco');

Route::get('inicio/portales/portal-sunco/etapa10s', [PortalController::class, 'etapa10sunco'])
->middleware('auth.admin2')
->name('admin.etapa10sunco');

Route::get('inicio/portales/portal-sunco/etapa15s', [PortalController::class, 'etapa15sunco'])
->middleware('auth.admin2')
->name('admin.etapa15sunco');

Route::get('inicio/portales/portal-sunco/etapa20s', [PortalController::class, 'etapa20sunco'])
->middleware('auth.admin2')
->name('admin.etapa20sunco');

// Vistas Portal libre

Route::get('inicio/portales/portal-libre/etapa5l', [PortalController::class, 'etapa5libre'])
->middleware('auth.admin3')
->name('admin.etapa5libre');

Route::get('inicio/portales/portal-libre/etapa10l', [PortalController::class, 'etapa10libre'])
->middleware('auth.admin3')
->name('admin.etapa10libre');

Route::get('inicio/portales/portal-libre/etapa15l', [PortalController::class, 'etapa15libre'])
->middleware('auth.admin3')
->name('admin.etapa15libre');

Route::get('inicio/portales/portal-libre/etapa20l', [PortalController::class, 'etapa20libre'])
->middleware('auth.admin3')
->name('admin.etapa20libre');


// Vistas Portal navega

Route::get('inicio/portales/portal-navega/etapa5n', [PortalController::class, 'etapa5navega'])
->middleware('auth.admin4')
->name('admin.etapa5navega');

Route::get('inicio/portales/portal-navega/etapa10n', [PortalController::class, 'etapa10navega'])
->middleware('auth.admin4')
->name('admin.etapa10navega');

Route::get('inicio/portales/portal-navega/etapa15n', [PortalController::class, 'etapa15navega'])
->middleware('auth.admin4')
->name('admin.etapa15navega');

Route::get('inicio/portales/portal-navega/etapa20n', [PortalController::class, 'etapa20navega'])
->middleware('auth.admin4')
->name('admin.etapa20navega');

Route::get('userdata', [IndexController::class, 'userdata'])
    ->middleware('auth')
    ->name('userdata');

Route::get('galeriaVue', [IndexController::class, 'galeriaVue'])
    ->middleware('auth')
    ->name('galeriaVue');

Route::get('portalObjetivos', [PortalController::class, 'portalObjetivos'])
    ->middleware('auth.admin1')
    -> name('portalObjetivos');

Route::get('portalEtapas', [PortalController::class, 'portalEtapas'])
    ->middleware('auth.admin1')
    -> name('portalEtapas');

Route::get('portalEvidencias', [PortalController::class, 'portalEvidencias'])
    ->middleware('auth.admin1')
    -> name('portalEvidencias');

