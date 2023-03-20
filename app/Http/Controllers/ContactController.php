<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Controlador para la pagina de contacto
//controladores en singular
use App\Models\Contact;
class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::paginate();

        return view('contacts.index', compact('contacts'));
    }//se separa la carpeta de la vista con un punto
    public function create(){
        return  view('contacts.create');
    }
    //Para pasar las variables se mandan como arrays
    public function show($id, $category = null){
        // compact('contact') es lo mismo que ['contact' => $contact]
        $contact = Contact::findOrFail($id);
       return view('contacts.show', [
           'contact' => $contact,
           'category' => $category
       ]);
    }
}
