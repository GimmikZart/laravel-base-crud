<?php

namespace App\Http\Controllers;

use App\Cane;

use Illuminate\Http\Request;

class CaniController extends Controller
{
    public function index(){
      $cani = Cane::all();

      return view("home", compact("cani"));
    }

    public function show_cani($id){
      $cani = Cane::all();

      $cane = $cani -> where("id", $id);
      $cane = $cane[$id - 1];
      return view("stampa_cane", compact("cane", "id"));
    }
}
