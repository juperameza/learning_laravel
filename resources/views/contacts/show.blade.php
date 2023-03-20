@extends('layouts.plantilla')
@section('title', 'Contacts ' . $contact->name)
@section('content')
    <h1> Contact name {{$contact->name}} </h1>
    <p> <strong>Phone: </strong> {{$contact->phone}} </p>
    <p> <strong>Email: </strong> {{$contact->email}} </p>
    <p> <strong>Category: </strong> {{$contact->category}} </p>
    <a href="{{route('contacts.index')}}">Back</a>
@endsection
