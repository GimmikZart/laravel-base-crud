@extends('layout.mainlayout')
@section('content')

  @if (session("success"))
    <h1>{{session("success")}}</h1>
  @endif

  <a href="{{route('create')}}">CREA UN PROFILO</a>

  @foreach ($omini as $omino)

    <a href="{{route('show', ($omino['id']))}}">
      <h1> {{$omino["firstname"]}} {{$omino["lastname"]}} </h1>
    </a>


  @endforeach
@endsection
