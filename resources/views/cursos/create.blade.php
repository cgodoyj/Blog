@extends('layouts.plantilla')
@section('title','cursos create')

@section('content')
<h1>"Aqui podrias crear un curso";</h1>

<form action="{{route('cursos.store')}}" method="POST">
    @csrf
    <label>
        Nombre: 
        <br>
        <input type="text" name="name" value="{{old('name')}}">
    </label>

    @error('name')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror

    <br>
    <label>
        Descripcion
        <br> 
        <textarea name="descripcion" rows="10">{{old('name')}}</textarea>
    </label>

    @error('descripcion')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror
    
    <br>
    <label>
        Categoria
        <br>
        <input type="text" name="categoria" value="{{old('name')}}">
    </label>
    
    @error('categoria')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror

    <button type="submit">Enviar formulario</button>    
    </form>
@endsection


