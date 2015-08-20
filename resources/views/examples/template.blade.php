@extends('examples.layout')

@section('titulo')
Curso cris
@stop

@section('contenido')
<h2>Curso basico de laravel 5</h2>
<p>
    @if (isset($user))
    Bienvenido {{$user}}
    @else
        [Login]
    @endif
</p>
@stop
