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
                <h1 class="title">
                    {{ $post->title }}
                </h1>
                <h4 class="card-subtitle">
                    {{ $post->user->name }}
                </h4>
                <h4 class="card-subtitle fs-6">
                    {{ $post->created_at }}
                </h4>
                @foreach ($post->categories as $category)
                    <span class="badge rounded-pill" style="background-color: {{$category->color}}" >
                        {{$category->name}}
                    </span>
                @endforeach
            </div>
            <div class="col-6 p-2 mb-2">
                @if(str_starts_with($post->image_url, 'https://') || str_starts_with($post->image_url, 'http://'))
                    <img class="rounded w-100" src="{{ $post->image_url }}" alt="image of {{$post->title}}">
                @else
                    <img class="rounded w-100" src="{{ asset('/storage') . '/' . $post->image_url }}" alt="image of {{$post->title}}">
                @endif
            </div>
            <div class="col-6 p-2">
                <div class="card-text">
                    {{ $post->content }}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12  p-2 mt-4 border-1">
                <h3 class="title">
                    Commenti
                </h3>
                <div class="row mb-5">
                    @forelse ($post->comments as $comment)
                    <div class="col-4 ">
                        <div class="card m-2 p-3 bg-dark text-white">
                            <div class="card-body">
                                <div class="card-text mb-3">
                                    {{ $comment->content }}
                                </div>
                                <div class="card-footer">
                                    <figcaption class="blockquote-footer">
                                        scritto da {{$comment->author}}
                                    </figcaption>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                        <h5>Questo post non ha nessun commento</h5>
                    @endforelse
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-12">
                <h3 class="title">Altri post dello stesso autore:</h3>

                @forelse ($post->user->posts as $relatedPost)
                    <a href="{{route('admin.posts.show', $relatedPost)}}">
                        <h6> {{ $relatedPost->title }} : {{ $relatedPost->created_at }}</h6>
                    </a>
                @empty
                    <h5>L'utente non ha scritto post</h5>
                @endforelse
            </div>
        </div>
    </div>
@endsection

{{-- @dump($post->user->posts ) --}}