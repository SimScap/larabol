@extends('layouts.base')

@section('title', 'Products')

@section('main-content')
    <div class="centralize">
        <h2>Products</h2>
        <div class="pasta-container">
            @foreach($pastas as $index => $pastaElement )
                <div class="pasta-element">
                    <img src="{{ $pastaElement['src'] }}" alt="{{ $pastaElement['titolo'] }}">
                    <h4>
                        {{-- ? Alternativa a url("products/$index") --}}
                        <a href="{{ route("guest-detail", ['index' => $index]) }}">
                            {{ $pastaElement['titolo'] }}
                        </a>
                    </h4>
                </div>
            @endforeach
        </div>
    </div>
@endsection
