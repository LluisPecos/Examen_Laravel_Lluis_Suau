<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\CorreoMailable;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    function enviar_email(Request $request) {
        
        $this->validate($request, [
            'titulo' => ['required', 'min:3'],
            'contenido' => ['required', 'min:10'],
        ]);
        
        $correo = new CorreoMailable($request->titulo, $request->contenido);
        
        Mail::to('lsuaupecos@iessonferrer.net')->send($correo);
        
        session()->flash('mensajeExito', 'Email enviado correctamente');
        return redirect()->back();
    }
}
