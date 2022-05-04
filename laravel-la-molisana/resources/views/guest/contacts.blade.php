@extends('layouts.base')

@section('title', 'Contacts')

@section('main-content')
    <h1>Contacts</h1>
    <h4>Ciao {{$username}}!!</h4>
    <p>
        Oggi è il {{$day}} di {{$month}} del {{$year}}!
    </p>
@endsection

@section('pre-footer')
    <p>Section before footer of the contacts page</p>
@endsection