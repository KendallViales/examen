<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apuesta;
use App\Models\Juego;

class ApuestasController extends Controller
{
    public function index()
    {
        $apuestas = Apuesta::with('juego')->get();

        return view('apuestas.index', compact('apuestas'));
    }
}   
