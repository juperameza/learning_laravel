<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Controlador para la pagina de contacto
//controladores en singular
use App\Models\Contact;
class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::orderBy('id','desc')->paginate();

        return view('contacts.index', compact('contacts'));
    }//se separa la carpeta de la vista con un punto
    public function create(){
        return  view('contacts.create');
    }
    public function store(Request $request){
        $request -> validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'category' => 'required',
            'description' => 'required',
        ]);
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->avatar = $request->avatar;
        $contact->category = $request->category;
        $contact->description = $request->description;
        $contact->save();
        return redirect()->route('contacts.show', $contact);
    }


    //Para pasar las variables se mandan como arrays
    public function show(Contact $contact){
        // compact('contact') es lo mismo que ['contact' => $contact]
       return view('contacts.show', [
           'contact' => $contact
       ]);
    }

    public function edit(Contact $contact){
        return view('contacts.edit', compact('contact'));
    }
    public function update(Request $request, Contact $contact){
        $request -> validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'category' => 'required',
            'description' => 'required',
        ]);
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->avatar = $request->avatar;
        $contact->category = $request->category;
        $contact->description = $request->description;
        $contact->save();
        return redirect()->route('contacts.show', $contact);
    }
}
