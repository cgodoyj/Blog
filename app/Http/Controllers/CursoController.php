<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

use App\Http\Requests\StoreCurso;

class CursoController extends Controller
{   //Metodo encargado de mostrar pagina principal
    public function index(){

         //Recuperando los registros de la bd
        //$cursos = Curso::all();
        $cursos = Curso::orderBy('id','desc')->paginate();

        return view('cursos.index', compact('cursos'));
   
    }
    //Metodo para crear formulario
    public function create(){
        return view('cursos/create');
    }

    //Metodo para recibir info del formulario
    public function store(StoreCurso $request){
        //return $request->all();

        // $request->validate([
        //     'name'=> 'required|max:10',
        //     'descripcion'=> 'required|min:10',
        //     'categoria'=>'required'
        // ]);
        

        // $curso = new Curso();

        // $curso->name=$request->name;
        // $curso->descripcion=$request->descripcion;
        // $curso->categoria=$request->categoria;

        // $curso->save();

        // $curso = Curso::create([
        // 'name' =>$request->name,
        // 'descripcion =>$request->descripcion',
        // 'categoria =>$request->categoria'
        // ]);

        $curso = Curso::create($request->all());

        return redirect()->route('cursos.show', $curso->id);
    }

    //Metodo para mostrar un elemento en particular
    public function show(Curso $curso){
        //$curso = Curso::find($id);
        return view('cursos.show', compact('curso'));
        //compact('curso'); = ['curso' => $curso]
        //return view('cursos.show', ['curso' => $curso]);
    }

    //Metodo para editar un registro
    public function edit (Curso $curso){
       // $curso = Curso::find($id);
       // return $curso;
       return view('cursos.edit',compact('curso'));
    }

    public function update(Request $request, Curso $curso){
        //return $request->all();

        $request->validate([
            'name'=> 'required',
            'descripcion'=> 'required',
            'categoria'=>'required'
        ]);

        // $curso->name = $request->name;
        // $curso->descripcion = $request->descripcion;      
        // $curso->categoria= $request->categoria;

        // $curso->save(); //actualiza a nivel bd
        $curso->update($request->all());
        return redirect()->route('cursos.show', $curso->id); // redirecciona a la vista show   
    } 

    public function destroy(Curso $curso){
        $curso->delete();
        return redirect()->route('cursos.index');
    }
}
