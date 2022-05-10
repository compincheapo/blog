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
        <input class="border" type="text" name="name">
    </label>

    <label>
        <br>
        Descripción:
        <br>
        <textarea class="border" name="description" rows="5"></textarea>
    </label>

    <label>
        <br>
        Categoría:
        <br>
        <input class="border" type="text" name="category">
    </label>

    <button class="border-2" type="submit">Enviar Formulario</button>
</form>
@endsection
