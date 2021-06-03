@extends('layouts.plantilla')
@section('title','curso '.$curso->name)

@section('content')
<h1>"Pagina curso de {{$curso->name}}"</h1>

<p><strong> Categoria: </strong>{{$curso->categoria}}</p>
<p>{{$curso->descripcion}}</p>
<a href="{{route('cursos.index')}}">Regresar a los cursos</a>
{{-- <h1>"Pagina curso de <?php echo $curso "" ?>";</h1> --}}
@endsection

