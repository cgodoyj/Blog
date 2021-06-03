@extends('layouts.plantilla')
@section('title','cursos create')

@section('content')
<h1>"Aqui podrias crear un curso";</h1>

<form action="{{route('cursos.store')}}" method=POST>
    @csrf
    <label>
        Nombre: 
        <br>
        <input type="text" name="name">
    </label>

    <br>
    <label>
        Descripcion
        <br> 
        <textarea name="descripcion" rows="10"></textarea>
    </label>
    
    <br>
    <label>
        Categoria
        <br>
        <input type="text" name="categoria">
    </label>
    
    <button type="submit">Enviar formulario</button>    
    </form>
@endsection


