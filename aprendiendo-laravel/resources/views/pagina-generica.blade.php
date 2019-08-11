@extends('layouts.master')

@section('titulo', 'Master en PHP')

@section('header')
    @parent()
    <h1>Este es el header perror</h1>
@stop
    
@section('content')
    <h1>Página Genérica</h1>

    <h5 style="color:red;">Hola perro</h5>
@stop