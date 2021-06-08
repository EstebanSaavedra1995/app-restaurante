<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservaController extends Controller
{
  public function index()
    {
        return view('reservas.index');

    }
    public function create()
    {
        return view('reservas.create');

    }

    public function store(Request $request)
    {
      return $request->all();
    }
}
