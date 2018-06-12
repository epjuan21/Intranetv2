<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndicadoresController extends Controller
{
    public function indicadores(){

        return view('indicadores.indicadores');
    }
}
