@extends('layouts.plantilla')
@section('title','cursos')

@section('content')
<h1>"Pagina cursos"</h1>
<a href="{{route('cursos.create')}}">Crear curso</a>
<ul>
    @foreach($cursos as $curso)
        <li> 
        {{-- Para hacer comentarios, seleccionar todo, control k y despues control c --}}
        {{-- {{route('cursos.show','abc')}}
        Daria la salida: http://127.0.0.1:8000/cursos/abc en lista --}}

        <a href="{{route('cursos.show', $curso->id)}}">"Curso de {{$curso->name}}"</a>
        <br>
        {{route('cursos.show', $curso->id)}}"
        

        </li>
    @endforeach
</ul>
    {{$cursos->links()}}

@endsection
