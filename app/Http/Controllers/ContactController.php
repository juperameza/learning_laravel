<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Controlador para la pagina de contacto
//controladores en singular
class ContactController extends Controller
{
    public function index(){
        return view('contacts.index');
    }//se separa la carpeta de la vista con un punto
    public function create(){
        return  view('contacts.create');
    }
    //Para pasar las variables se mandan como arrays
    public function show($contact, $category = null){
        // compact('contact') es lo mismo que ['contact' => $contact]
       return view('contacts.show', [
           'contact' => $contact,
           'category' => $category
       ]);
    }
}
