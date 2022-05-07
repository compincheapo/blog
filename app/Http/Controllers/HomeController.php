<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){     //Cuando el controlador administra una sola ruta.
        return view('home');
    }
   
}
