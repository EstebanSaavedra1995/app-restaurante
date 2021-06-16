<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

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
      $horaActual= $this->cargarHoras();
      return view('reservas.create',compact(['today','tomorrow','horaActual']));

    }

    public function store(Request $request)
    {
        $fecha= $request->fecha;
        $reservas= Reserva::where('fecha',$fecha)->get();
        return $reservas;
        
    }

    public function cargarHoras(){
      $h =  new Carbon('19:00:00');
      //$hora =$h->format('H:i:s');
  
     
    
 
      $horas[] = $h;
      

      for ($i=1; $i < 15 ; $i++) { 
        $horas[] = $h->addMinutes(30);
      } 
      return $horas;
    }

/*     public function cargarHoras()
    {
      if(request()->getMethod()=='POST'){
      
        return  response()->json();
        $fecha= request('fecha');
        Reserva::where('fecha',$fecha); 
        
      }
    } */
     
}
