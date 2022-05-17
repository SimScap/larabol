
@extends('layouts.main')

@section('title', 'Pokemon detail')

@section('main-content')
    <div class="wrapper w-75 mx-auto">
        <div class="container-fluid">
            <div class="row p-4 text-center">
                <div class="col-12 m-3">
                    <h5 class="card-title">
                        {{ $habitat->name  }}
                    </h5>
                    <h6 class="card-subtitle mb-2 text-muted">
                        {{$habitat->main_type }}
                    </h6>
                    <h6 class="card-subtitle mb-2 text-muted">
                        {{$habitat->additional_type }}
                    </h6>
                </div>
                <div class="col-12 m-3">
                    <img src="{{$habitat->image_url}}" class="img-fluid rounded-start" alt="Picture of {{$habitat->name}}">
                </div>
                <div class="col-12 m-3">
                    <p class="card-text text-start">
                        {{$habitat->description}}
                    </p>
                </div>
                <div class="col-6">
                    <a href="{{route("habitats.show",$habitat->id - 1)}}">
                        <button class="btn btn-success">Previous</button>
                    </a>
                </div>
                <div class="col-6">
                    <a href="{{route("habitats.show",$habitat->id + 1)}}">
                        <button class="btn btn-success">Next</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection