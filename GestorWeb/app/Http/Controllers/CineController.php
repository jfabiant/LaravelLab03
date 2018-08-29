<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CineController extends Controller
{

    public function index()
    {
        return view('Cine.index');
    }

    public function procesar1 (Request $request) {
        $edad = $request->input('edad');
        $condicion = $request->input('condicion');
        
        if($edad<12 || $condicion=="Si"){
            $precio = 3;
        } else {
            $precio = 10;
        }
        
        $datos = [
            'val_edad' => $edad,
            'val_condicion' => $condicion,
            'val_precio' => $precio
        ];

       return view ('Cine.procesar1', $datos);
    }
    
}
