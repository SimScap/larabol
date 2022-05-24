@extends('layouts.app')

@section('content')
    <div class="container-fluid w-75 mx-auto">
        <div class="row">
            @if(session('message'))
                <div class="col-12">
                    <div class="alert alert-success">
                        {{session('message')}}
                    </div>
                </div>
            @endif
            <div class="col-12 p-2 mb-2">
                <h2>
                    Categoria:
                </h2>
                <h1 class="title text-center "  style="background-color: {{$category->color}}">
                    {{ $category->name }}
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                {{-- <h3 class="title">Altri post dello stesso autore:</h3>

                @forelse ($post->user->posts as $relatedPost)
                    <a href="{{route('admin.posts.show', $relatedPost)}}">
                        <h6> {{ $relatedPost->title }} : {{ $relatedPost->created_at }}</h6>
                    </a>
                @empty
                    <h5>L'utente non ha scritto post</h5>
                @endforelse
            </div> --}}
        </div>
    </div>
@endsection

@dump($category->posts)