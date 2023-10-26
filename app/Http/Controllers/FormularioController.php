<?php

namespace App\Http\Controllers;

use App\Notifications\Cotizacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class FormularioController extends Controller
{
    public function formulario(Request $request){

        $correoDestino = $request->email; 

        
        Notification::route('mail', $correoDestino)
            ->notify(new Cotizacion($request->name, $request->options,  'sin detalles' ));
    
        return view('welcome');
    }
}
