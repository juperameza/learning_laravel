<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Controlador para la pagina de contacto
//controladores en singular
class ContactController extends Controller
{
    public function index(){
        return "Contacts page";
    }
    public function create(){
        return "Create contact";
    }
    public function show($contact, $category = null){
        if($category){
            return "Contact: $contact, Category: $category";
        }else{
            return "Contact: $contact";
        }
    }
}
