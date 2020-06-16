@extends('main_layout')
@section('content')
  <div class="main">
    @foreach ($cani as $cane)
      <a href="{{route("stampaCane", $cane["id"])}}">{{$cane["nome"]}}</a>  
    @endforeach
  </div>
@endsection
