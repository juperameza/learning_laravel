@extends('layouts.plantilla')
@section('title', 'Contacts')
@section('content')
    <h1> Contacts </h1>
    <a href="{{route('contacts.create')}}">Create contact</a>
    <ul>
        @foreach ($contacts as $contact)
            <li>
                <a href="{{ route('contacts.show',$contact->id)}}">
                    {{ $contact->name }}
                </a>
            </li>
        @endforeach
        {{ $contacts->links()}}
@endsection
