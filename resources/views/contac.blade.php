@extends('master')

@section('contect')
    <h1> Contact 1</h1>
    <p>{{  $name }} </p>

    @if ($name != "Juan")
        Bienvenido Juan
    @else
        <h2> Tu nombre es Carlos Alberto </h2>    
    @endif

    <u>
    @foreach ([1,2,3,4,5] as $item)
        <li> {{ $item }} </li>
    @endforeach
    </u> 
    
@endsection