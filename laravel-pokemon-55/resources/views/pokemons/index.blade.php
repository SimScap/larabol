@extends('layouts.main')

@section('title', 'Pokemon list')

@section('main-content')
    <div class="wrapper w-75 mx-auto">
        <div class="container-fluid">
            <div class="row p-2">
                @foreach ($pokemons as $pokemon)
                <div class="col-4 p-2">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{asset("assets/img") . '/'. $pokemon->name . '.png'}}" class="img-fluid rounded-start" alt="Picture of {{$pokemon->name}}">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        {{-- <a href='{{url("/post/$post->id")}}'> --}}
                                        <a href='{{route("pokemons.show", $pokemon->id)}}'>
                                            {{ ucfirst($pokemon->name) }}
                                        </a>
                                    </h5>
                                    <h6 class="card-subtitle mb-2 text-muted">
                                        {{ $pokemon->main_type }}
                                    </h6>
                                    <h6 class="card-subtitle mb-2 text-muted">
                                        @if ($pokemon->additional_type)
                                            {{ $pokemon->additional_type }}
                                        @else
                                            None
                                        @endif
                                    </h6>
                                    <p class="card-text">
                                        {{-- {{ substr($post->post_content, 0, 70) }} --}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-8">
                    {{ $pokemons->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection