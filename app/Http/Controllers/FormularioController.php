<?php

namespace App\Http\Controllers;

use App\Models\Cotization;
use App\Notifications\Cotizacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class FormularioController extends Controller
{

    function index() {
        return view('welcome');
    }
    public function formulario(Request $request){

        $request->validate([
            'email' => 'required|email', 
        ]);
    
        $correoDestino = $request->email;
        
        $createCotization = new Cotization();
        $createCotization->reference = uniqid();
        $createCotization->name = $request->name;
        $createCotization->email = $request->email;
        $createCotization->type = $request->options;
        $createCotization->details = '';
        $createCotization->save();
    
        Notification::route('mail', $correoDestino)
            ->notify(new Cotizacion($request->name, $request->options,  $createCotization->reference ));
    
        return redirect()->action([FormularioController::class, 'index'])->with('message', 'Cotización enviada correctamente');

    }
}
