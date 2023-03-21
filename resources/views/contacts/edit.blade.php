@extends('layouts.plantilla')
@section('title', 'Contacts ' . $contact->name)
@section('content')
<h1> Contacts edit page </h1>
<form action="{{route('contacts.update', $contact)}}" method="post">
    @method('put')
    @csrf
    <div>
    <label for="name"> Nombre: </label>
     <input type="text" name="name" id="name" value="{{$contact->name}}">
        </div>
    <div>
    <label for="phone"> Phone: </label>
     <input type="text" name="phone" id="phone" value="{{$contact->phone}}">
        </div>
    <div>
    <label for="email"> Email: </label>
     <input type="text" name="email" id="email" value="{{$contact->email}}">
        </div>
    <div>
    <label for="category"> Category: </label>
     <input type="text" name="category" id="category" value="{{$contact->category}}">
        </div>
        <div>
            <label for="description"> Description: </label>
            <textarea name="description" id="description" cols="30" rows="10" >{{$contact->description}}</textarea>
    <div>
    <button type="submit">Edit contact</button>
    </div>

</form>
@endsection
