<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class IndicadoresController extends Controller
{
    public function indicadores(){

        //return view('indicadores.indicadores');

        $data= DB::select('EXEC SP_TOTAL_EDA "20160101","20160131"');
        dd($data);

    }
}
