@extends('layouts.app')

@section('content')
    <div class="container-fluid w-75 mx-auto">
        <div class="row">
            <div class="col-12 p-2 mb-2">
                <h1 class="title">
                    {{ $post->title }}
                </h1>
                <h4 class="card-subtitle">
                    {{ $post->author }}
                </h4>
                <h4 class="card-subtitle">
                    {{ $post->created_at }}
                </h4>
            </div>
        </div>
        <div class="col-12 p-2 mb-2">
            <img src="{{ $post->image_url }}" alt="image of {{$post->title}}">
        </div>
        <div class="col-12 p-2">
            <div class="card-text">
                {{ $post->content }}
            </div>
        </div>
    </div>
@endsection

