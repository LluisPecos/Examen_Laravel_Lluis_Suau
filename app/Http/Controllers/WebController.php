<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    function home() {
        return view("home");
    }
    
    function migraciones() {
        session()->flash('mensajeExito', 'Migración realizada correctamente');
        return redirect()->back();
    }
    
    function seeders() {
        session()->flash('mensajeExito', 'Seeder realizado correctamente');
        return redirect()->back();
    }
    
    function email() {
        session()->flash('mensajeExito', 'Email enviado correctamente');
        return redirect()->back();
    }
}
