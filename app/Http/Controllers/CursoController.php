<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{   //Metodo encargado de mostrar pagina principal
    public function index(){
        return view('cursos.index');
    }
    //Metodo para crear formulario
    public function create(){
        return view('cursos/create');
    }
    //Metodo para mostrar un elemento en particular
    public function show($curso){
        return view('cursos.show', compact('curso'));
        //compact('curso'); = ['curso' => $curso]
        //return view('cursos.show', ['curso' => $curso]);
    }
}
