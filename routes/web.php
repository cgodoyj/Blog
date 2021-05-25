<?php

//Se agrega solo al escribir en la ruta mediante el Intelphense
use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;

//Especificamos que se utilizara este controllador
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', function () {
    return view('dashboard2');
})->name('dashboard');

//Asignando una Ruta al Controlador HomeController Sintaxis Laravel8
//Esta ruta busca el metodo invoke
//Route::get('/', HomeController::class);
Route::get('/', 'HomeController');

//Se utiliza el nombre del metodo que administra la ruta
Route::get('cursos', [CursoController::class, 'index']);
Route::get('cursos/create', [CursoController::class, 'create']);
Route::get('cursos/{curso}', [CursoController::class, 'show']);


/*Route::get('cursos/{curso}/{categoria?}', function($curso, $categoria = null){
    if($categoria){
        return "Bienvenido a la pagina del curso de $curso de la categoria $categoria";
    }else{
        return "Bienvenido a la pagina del curso de $curso ";
    }
    
});*/

/*Sintaxis de Laravel 7
Route::get('/', 'HomeController');
Route::get('cursos', 'CursoController@index');

Para que funcione esta sintaxis
en: app/providers/routeserviceprovider.php agregar
protected $namespace = 'App\Http\Controllers;

en el metodo boot:
->namespace($this->namespace)
*/
