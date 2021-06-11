<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Turno;

class ReservaController extends Controller
{
  public function index()
    {
      return view('reservas.index');

    }
    public function create()
    {
      $date = Carbon::now()->timezone('America/Argentina/Ushuaia');
      $today = $date->format('Y-m-d');
      $tomorrow = $date->addDays(2)->format('Y-m-d');
      return view('reservas.create',compact(['today','tomorrow']));

    }

    public function store(Request $request)
    {
      return $request->all();
    }

    public function cargarHoras()
    {
      if(request()->getMethod()=='POST'){
        $horarios= Turno::select('inicio','id')->get();
        return json_encode($horarios);
        
      }
    }
     
}
