@extends('layout.mainlayout')
@section('content')

  <div class="container">
    @if (session("success"))
      <h1>{{session("success")}}</h1>
    @endif
    <div>
      <a href="{{route("home")}}">TORNA ALLA HOME</a>
      <section id="showProfile">
        firstname: {{$omino["firstname"]}} <br>
        lastname: {{$omino["lastname"]}} <br>
        address: {{$omino["address"]}} <br>
        code: {{$omino["code"]}} <br>
        state: {{$omino["state"]}} <br>
        phonenumber: {{$omino["phonenumber"]}} <br>
        role: {{$omino["role"]}} <br>
        <a href="{{route("edit", $omino['id'])}}">EDITA IL PROFILO</a>
        <a href="{{route("destroy", $omino['id'])}}">CANCELLA IL PROFILO</a>
      </section>
    </div>
  </div>


@endsection
