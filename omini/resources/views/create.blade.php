@extends('layout.mainlayout')
@section('content')

  <div class="container">
    <div>
      <a href="{{route("home")}}">TORNA ALLA HOME</a>
      <section id="editProfile">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{route("store")}}" method="post">
          @csrf
          @method('POST')
          <label for="firstname">FIRSTNAME:</label>
          <input type="text" name="firstname" value=""> <br>

          <label for="lastname">LASTNAME:</label>
          <input type="text" name="lastname" value=""> <br>

          <label for="address">ADDRESS:</label>
          <input type="text" name="address" value=""> <br>

          <label for="code">CODE:</label>
          <input type="text" name="code" value=""> <br>

          <label for="state">STATE:</label>
          <input type="text" name="state" value=""> <br>

          <label for="phonenumber">PHONENUMBER:</label>
          <input type="text" name="phonenumber" value=""> <br>

          <label for="role">ROLE:</label>
          <input type="text" name="role" value=""> <br>

          <input type="submit" name="submit" value="CREATE">
        </form>
      </section>
    </div>
  </div>


@endsection
