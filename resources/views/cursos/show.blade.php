@extends('layouts.plantilla')
@section('title','curso '.$curso->name)

@section('content')
<h1>"Pagina curso de {{$curso->name}}"</h1>

<p><strong> Categoria: </strong>{{$curso->categoria}}</p>
<p>{{$curso->descripcion}}</p>

<a href="{{route('cursos.index')}}">Regresar a los cursos</a><br>
<a href="{{route('cursos.edit', $curso)}}">Editar curso</a>

<form action="{{route('cursos.destroy', $curso)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
</form>

{{-- <h1>"Pagina curso de <?php echo $curso "" ?>";</h1> --}}

@endsection
