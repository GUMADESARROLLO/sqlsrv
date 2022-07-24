<?php

namespace App\Http\Controllers;
use App\Models\Articulos;

class DashboardController extends Controller
{
/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    public function getHome(){
        $Articulos = Articulos::getArticulos();
        $ArticulosDos = Articulos::getArticulosDos();
        return view('Dashboard.Home', compact('Articulos','ArticulosDos'));      
    }
}