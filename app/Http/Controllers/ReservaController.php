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
    return view('reservas.create', compact(['today', 'tomorrow']));
  }

  public function store(Request $request)
  {
/*     
    return $request->all(); */
    //"personas":"2","fecha":"2021-06-16","hora":"19:00:00"
    $fecha = $request->fecha;
    $hora =  new Carbon($request->hora);
    $hAntes = $hora->subMinutes(120)->toTimeString();
    $hDespues =  $hora->addMinutes(240)->toTimeString();
    $reservas = Reserva::where('fecha', $fecha)
    ->where('hora','<',$hDespues)
    ->where('hora','>',$hAntes)->get(); 

    $reserva = new Reserva();
    $reserva->total = 0;
    $reserva->hora = $request->hora;
    $reserva->fecha = $request->fecha;
    $reserva->mesa_id = 3;
    $reserva->user_id = 1;
    $reserva->save();
    return $reservas;

   
  }

  public function filtrarHorasHoy()
  {
    $date = Carbon::now()->timezone('America/Argentina/Ushuaia');
    $horaActual = $date->format('H:i:s');
    $horas = $this->cargarHoras();
    $horasFiltradas = array();
    foreach ($horas as $hora) {
      if ($hora > $horaActual || $hora < '19:00:00') {
        array_push($horasFiltradas, $hora);
      }
    }
    return $horasFiltradas;
  }
  public function cargarHoras()
  {
    $hora =  new Carbon('19:00:00');
    //$hora =$h->format('H:i:s')
    $horas = array();
    array_push($horas, $hora->toTimeString());
    for ($i = 0; $i < 14; $i++) {
      $hora = $hora->addMinutes(30);
      array_push($horas, $hora->toTimeString());
    }
    return $horas;
  }

  public function horasAsincronas()
  {
    $date = Carbon::now()->timezone('America/Argentina/Ushuaia');
    $today = $date->format('Y-m-d');
    if (request()->getMethod() == 'POST') {
      $fecha = request('fecha');
      if ($fecha == $today) {
        return  response()->json($this->filtrarHorasHoy());
        
      } else {
        return  response()->json($this->cargarHoras());
      }
    }
  }
}
