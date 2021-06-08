@extends('layouts.plantilla')
@section('title','cursos edit')

@section('content')
<h1>"Aqui editaras el curso";</h1>

<form action="{{route('cursos.update', $curso)}}" method="post">
    @csrf

    {{-- @method('PUT') --}}
        <label>
            Nombre:<br> 
            <input type="text" name="name" value="{{old('name', $curso->name)}}">

        </label>

        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror


        <br>
        <label>
            Descripcion:<br> 
            <textarea name="descripcion" rows="10">{{old('descripcion', $curso->descripcion)}}</textarea>
        </label>

         @error('descripcion')
            <br>
            <small>*{{$message}}</small>
            <br>
         @enderror
        <br>

        <label>
            Categoria:<br>
            <input type="text" name="categoria" value="{{old('name', $curso->categoria)}}">
        </label>

        @error('categoria')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <button type="submit">Actualizar formulario</button>    
        </form>
@endsection
