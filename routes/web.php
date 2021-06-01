<?php
use Illuminate\Support\Facades\Route;

//Especificamos manualmente que se utilizara este controllador
use App\Http\Controllers\HomeController;
//Se agrega solo al escribir en la ruta mediante el Intelphense
use App\Http\Controllers\CursoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', function () {
    return view('dashboard2');
})->name('dashboard');

//Asignando una Ruta al Controlador HomeController Sintaxis Laravel 8
//Esta ruta busca el metodo invoke
Route::get('/', HomeController::class);

//Se utiliza el nombre del metodo que administra la ruta
Route::get('cursos', [CursoController::class, 'index']);
Route::get('cursos/create', [CursoController::class, 'create']);
Route::get('cursos/{curso}', [CursoController::class, 'show']);

/*
Sintaxis de Laravel 7:
Route::get('/', 'HomeController'); --> Para el metodo invoke
Route::get('cursos', 'CursoController@index'); --> Para metodos no invocables

Para que funcione esta sintaxis
en: app/providers/routeserviceprovider.php descomentar
protected $namespace = 'App\Http\Controllers;

en el metodo boot:
->namespace($this->namespace)
*/

//Noe
Route::get('/EntradaIndex',[EntradaController::class,'index'])->name('EntradaIndex');
Route::get('/EntradaForm',[EntradaController::class,'create'])->name('EntradaForm');
Route::post('/EntradaNuevo',[EntradaController::class,'store'])->name('EntradaNuevo');
Route::get('/EntradaEdit/{id}', [EntradaController::class,'edit'])->name('EntradaEdit');
Route::post('/EntradaUpdate/{id}', [EntradaController::class,'update'])->name('EntradaUpdate');
