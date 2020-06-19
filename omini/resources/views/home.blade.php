@extends('layout.mainlayout')
@section('content')
  @foreach ($omini as $omino)
    <a href="{{route('show', ($omino['id']))}}">
      <h1> {{$omino["firstname"]}} {{$omino["lastname"]}} </h1>
    </a>


  @endforeach
@endsection
