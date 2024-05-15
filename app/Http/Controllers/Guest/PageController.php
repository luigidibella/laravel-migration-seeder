<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index(){
        return view('home');
    }

    public function nuovaPagina(){
        $trains = Train::all();

        return view('nuova-pagina', compact('trains'));
    }

    public function trains(){
        return view('trains');
    }
}
