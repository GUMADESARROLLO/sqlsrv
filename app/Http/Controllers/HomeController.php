<?php

namespace App\Http\Controllers;
use App\Models\Articulos;

class HomeController extends Controller
{
/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    public function getArticulos()
    {
        $Articulos = Articulos::getArticulos();        
        return response()->json($Articulos);
        //echo phpinfo();

    }
    public function getArticulosDos() {
		$obj = Articulos::getArticulosDos();
		return response()->json($obj);
	}

}