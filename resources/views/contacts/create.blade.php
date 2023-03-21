@extends('layouts.plantilla')
@section('title', 'Contacts crete')
@section('content')
    <h1> Contacts creation page </h1>
    <form action="{{route('contacts.store')}}" method="POST">
        @csrf
        <div>
        <label for="name"> Nombre: </label>
         <input type="text" name="name" id="name">
            </div>
        <div>
        <label for="phone"> Phone: </label>
         <input type="text" name="phone" id="phone">
            </div>
        <div>
        <label for="email"> Email: </label>
         <input type="text" name="email" id="email">
            </div>
        <div>
        <label for="category"> Category: </label>
         <input type="text" name="category" id="category">
            </div>
            <div>
                <label for="description"> Description: </label>
                <textarea name="description" id="description" cols="30" rows="10"></textarea>
        <div>
        <button type="submit">Create contact</button>
        </div>

    </form>
@endsection
