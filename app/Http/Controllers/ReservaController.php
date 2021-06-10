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
      $dt = Carbon::now()->timezone('America/Argentina/Ushuaia');
      $today = $dt->format('Y-m-d');
      $tomorrow = $dt->addDays(2)->format('Y-m-d');
      return view('reservas.create',compact(['today','tomorrow']));

    }

    public function store(Request $request)
    {
      return $request->all();
    }

    public function ajax()
    {
      if(request()->getMethod()=='POST'){
        $horarios= Turno::select('inicio','id')->get();
        return json_encode($horarios);
        
      }
     
    }
     
}
