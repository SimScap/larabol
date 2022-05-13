@extends('layouts.main')

@section('title', 'Houses')

@section('main-content')
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>Agenti immobiliari disponibili</h1>
                    {{-- @dump($houses) --}}
                </div>
                @foreach ($agents as $agent)
                    <div class="col-4">
                        <div class="card p-3 m-2">
                            <img src="{{ $agent->image }}" class="card-img-top" alt="Picture of {{$agent->first_name}} {{$agent->last_name}}">
                            <div class="card-body">
                                <h5 class="card-title">
                                    {{ $agent->first_name }} {{ $agent->last_name }}
                                </h5>
                                <h6 class="card-subtitle mb-2 text-muted">
                                    {{ $agent->birth_date }}
                                </h6>
                                <p class="card-text">
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

