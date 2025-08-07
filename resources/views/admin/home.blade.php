@extends('admin.layouts.main')


@section('title', 'Menu Principal')


@section('content')
<a href="{{url('hola')}}">1. Hola Mundo</a>
<br>
<a href="{{route('practica1')}}">1. Hola Mundo</a>
<br>
<a href="{{route('practica2',['nombre'=>'Carlos','edad'=>35])}}">2. Rutas y Paso de Parametros</a>
<br>
<a href="{{route('practica3')}}">3. Rutas de Parametros por defecto</a>
<br>
<a href="{{route('saludo.dia')}}">4. saludo Dia</a>
<br>
<a href="{{route('saludo.tarde')}}">5. saludo Tarde</a>
<br>
<a href="{{route('saludo.noches')}}">6. saludo Noche</a>
<br>
<a href="{{route('practica4',['id'=>5])}}">7. Validacion de Parametros</a>


@endsection
