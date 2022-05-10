@extends('layouts.plantilla')

@section('title', 'Editar Curso')

@section('content')

<h1>Editar curso</h1>
{{route('cursos.store')}}
<form action="{{route('cursos.update', $curso)}}" method="post">
    
    @csrf               <!-- Directiva para token para evitar exploteación de vulnerabilidad CSRF. -->

    @method('put')      <!--Directiva para que HTML reconozca al método PUT -->

    <label>
        Nombre:
        <br>
        <input class="border" type="text" name="name" value="{{$curso->name}}">
    </label>

    <label>
        <br>
        Descripción:
        <br>
        <textarea class="border" name="description" rows="5">{{$curso->description}}
        </textarea>
    </label>

    <label>
        <br>
        Categoría:
        <br>
        <input class="border" type="text" name="category" value="{{$curso->category}}">
    </label>

    <button class="border-2" type="submit">Editar</button>
</form>
@endsection
