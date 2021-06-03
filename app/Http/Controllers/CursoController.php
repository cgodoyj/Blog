<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{   //Metodo encargado de mostrar pagina principal
    public function index(){

         //Recuperando los registros de la bd
        //$cursos = Curso::all();
        $cursos = Curso::paginate();

        return view('cursos.index', compact('cursos'));
   
    }
    //Metodo para crear formulario
    public function create(){
        return view('cursos/create');
    }

    //Metodo para recibir info del formulario
    public function store(Request $request){
        $curso = new Curso();

        $curso->name=$request->name;
        $curso->descripcion=$request->descripcion;
        $curso->categoria=$request->categoria;

	    $curso->save();
    }


    //Metodo para mostrar un elemento en particular
    public function show($id){
        $curso = Curso::find($id);
        return view('cursos.show', compact('curso'));
        //compact('curso'); = ['curso' => $curso]
        //return view('cursos.show', ['curso' => $curso]);
    }
}
