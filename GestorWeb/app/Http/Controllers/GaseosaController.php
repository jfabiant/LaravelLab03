<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GaseosaController extends Controller
{
    
    public function procesar2 (Request $request){
        $gaseosa = $request->input('gaseosa');

        $datos = [
            'val_gaseosa' => $gaseosa
        ];

        return view ('Gaseosa.procesar2', $datos);
    }

}
