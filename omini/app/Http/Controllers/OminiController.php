<?php

namespace App\Http\Controllers;
use App\Omino;
use Illuminate\Http\Request;

class OminiController extends Controller
{
    // FUNZIONE DI INDICIZZAZIONE
    public function index(){
      $omini=Omino::all();
      return view('home', compact("omini"));
    }

    // FUNZIONE PER MOSTRARE UN SINGOLO ELEMENTO NEL DETTAGLIO
    public function show($id){
      $omino= Omino::findOrFail($id);

      return view('show', compact("omino"));
    }

    // FUNZIONE PER MOSTRARE EDITARE UN ELEMENTO
    public function edit($id){
      $omino= Omino::findOrFail($id);

      return view('edit', compact("omino"));
    }

    public function update(Request $request, $id){



      $validatedData = $request->validate([
       'firstname' => 'required',
       'lastname' => 'required',
       'address' => 'required',
       'code' => 'required',
       'state' => 'required',
       'phonenumber' => 'required',
       'role' => 'required'
      ]);

      $omino = Omino::findOrFail($id);

      $omino -> firstname = $validatedData["firstname"];
      $omino -> lastname = $validatedData["lastname"];
      $omino -> address = $validatedData["address"];
      $omino -> code = $validatedData["code"];
      $omino -> state = $validatedData["state"];
      $omino -> phonenumber = $validatedData["phonenumber"];
      $omino -> role = $validatedData["role"];

      $omino -> save();

      return redirect()
              -> route("show" , $id)
              -> withSuccess("Updated"
                              . $omino["firstname"]
                              . "succesfully!!");

    }


    // FUNZIONE PER ELIMINARE UN ELEMENTO
    public function destroy($id){
      $omino= Omino::findOrFail($id);

      $omino -> delete();

      return redirect()
              -> route("home" , $id)
              -> withSuccess("Deleting"
                              . $omino["firstname"]
                              . "succesfully!!");

    }

    // FUNZIONE PER CREARE UN ELEMENTO
    public function create(){

    return view("create");
    }

    // FUNZIONE PER IMMAGAZZINARE UN ELEMENTO
    public function store(Request $request){



      $validatedData = $request->validate([
       'firstname' => 'required',
       'lastname' => 'required',
       'address' => 'required',
       'code' => 'required',
       'state' => 'required',
       'phonenumber' => 'required',
       'role' => 'required'
      ]);

      $omino = new Omino;

      $omino -> firstname = $validatedData["firstname"];
      $omino -> lastname = $validatedData["lastname"];
      $omino -> address = $validatedData["address"];
      $omino -> code = $validatedData["code"];
      $omino -> state = $validatedData["state"];
      $omino -> phonenumber = $validatedData["phonenumber"];
      $omino -> role = $validatedData["role"];

      $omino -> save();

      return redirect()
              -> route("home")
              -> withSuccess("Create"
                              . $omino["firstname"]
                              . "succesfully!!");

    }
}
