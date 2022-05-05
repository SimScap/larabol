@extends('layouts.base')

@section('title', 'dettaglio pasta')

@section('main-content')
    <div class="centralize bg-blue">
        <div class="single-pasta-container">
            <div class="single-pasta-element">
                <h1>{{ $pasta['titolo'] }}</h1>
                <img class="pasta-thumbnail" src="{{ $pasta['src-h'] }}" alt="{{ $pasta['titolo'] }}">
            </div>
            <div class="single-pasta-element">
                <img src="{{ $pasta['src-p'] }}" alt="{{ $pasta['titolo'] }}">
                <p>
                    {!! $pasta['descrizione'] !!}
                </p>
            </div>
        </div>
    </div>
@endsection
