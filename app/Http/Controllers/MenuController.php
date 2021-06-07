<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    
    public function index(){
        $menus= Menu::paginate(5);
        //return view('reservas', compact('nombre'));
        return view('menus.index', compact('menus'));
    }
}
