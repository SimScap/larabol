@extends('layouts.base')

@section('title', 'Home')

@section('main-content')
    <div class="centralize">
        <h2>Products</h2>
        <div class="pasta-container">
            @foreach($pastas as $pastaElement)
                <div class="pasta-element">
                    <img src="{{ $pastaElement['src'] }}" alt="{{ $pastaElement['titolo'] }}">
                    <h4>{{ $pastaElement['titolo'] }}</h4>
                    @dump($pastaElement)
                </div>
            @endforeach
        </div>
    </div>
    @dump($pastas)
@endsection
