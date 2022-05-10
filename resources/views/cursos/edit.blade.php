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
         <!--Al enviar el campo toma lo que se encuentra en el mismo (que tipeamos, con 'old'). Al ingresar al formulario desde la vista 'cursos' toma el valor del objeto ($curso->name).-->

        <input class="border" type="text" name="name" value="{{old('name',$curso->name)}}">
               
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
        <textarea class="border" name="description" rows="5">{{old('description',$curso->description)}}
        </textarea>
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
        <input class="border" type="text" name="category" value="{{old('category',$curso->category)}}">
    </label>

    @error('category')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror

    <button class="border-2" type="submit">Editar</button>
</form>
@endsection
