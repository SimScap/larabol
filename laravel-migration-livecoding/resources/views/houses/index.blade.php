@extends('layouts.main')

@section('title', 'Houses')

@section('main-content')
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 m-3 p-5">
                    <h1 class="text-center">Case disponibili attualmente </h1>
                    {{-- @dump($houses) --}}
                </div>
                @foreach ($houses as $house)
                    <div class="col-4">
                        <div class="card p-3 m-2">
                            <img src="{{ $house->image }}" class="card-img-top" alt="The current house image">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Casa in {{ $house->address }}, a {{ $house->city }}
                                </h5>
                                <h6 class="card-subtitle mb-2 text-muted">
                                    Prezzo: {{ $house->price }}€
                                </h6>
                                <p class="card-text">
                                    {{ $house->description }}
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt itaque eveniet deleniti dicta laborum sit odit eos neque fugiat. Deserunt enim atque sit nobis aperiam incidunt blanditiis doloribus at velit.
                                </p>

                                <a href="#" class="card-link">

                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </main>
@endsection

