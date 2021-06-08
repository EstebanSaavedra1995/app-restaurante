<?php

namespace App\Http\Controllers;

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
      $today = Carbon::today();
      return view('reservas.create',compact('today'));

    }

    public function store(Request $request)
    {
      return $request->all();
    }
}
