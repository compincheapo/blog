@extends('layouts.plantilla')

@section('title', 'Crear Curso')

@section('content')

<h1>Crear curso</h1>
{{route('cursos.store')}}
<form action="{{route('cursos.store')}}" method="POST">
    
    @csrf

    <label>
        Nombre:
        <br>
        <input class="border" type="text" name="name" value="{{old('name')}}">
    </label>

    @error('name')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror

    <label>
        <br>
        Descripción:
        <br>
        <textarea class="border" name="description" rows="5" >{{old('description')}}</textarea >
    </label>

    @error('description')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror

    <label>
        <br>
        Categoría:
        <br>
        <input class="border" type="text" name="category" value="{{old('category')}}">
    </label>

    @error('category')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror

    <button class="border-2" type="submit">Enviar Formulario</button>
</form>
@endsection
