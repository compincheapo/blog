@extends('layouts.plantilla')

@section('title', 'Curso ' . $curso->name)


@section('content')

<h1 class="text-xl font-semibold">Estamos en el curso: {{$curso->name}} </h1>
<a href="{{route('cursos.edit', $curso)}}">Editar Curso</a>
<br>
<a href="{{route('cursos.index')}}">Volver a cursos</a>
<p><strong>Categoria:</strong>{{$curso->category}}</p>
<p>{{$curso->description}}</p>

@endsection
