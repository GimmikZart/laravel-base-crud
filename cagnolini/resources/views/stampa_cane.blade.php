@extends('main_layout')
@section('content')
  <div class="main">
    Il cane {{$cane["nome"]}} è di razza {{$cane["tipo"]}}, è alto {{$cane["altezza"]}}cm e pesa {{$cane["peso"]}}Kg.
  </div>
@endsection
