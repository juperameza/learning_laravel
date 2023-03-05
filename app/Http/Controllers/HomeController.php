<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Los controladores son clases que se encargan de manejar las peticiones que llegan al servidor
//Por convencion se debe llamar en singular
class HomeController extends Controller
{
    //El metodo __invoke se ejecuta cuando se hace una peticion a la ruta
    public function  __invoke(){
        return "Home page";
    }
}
