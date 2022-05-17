
@extends('layouts.main')

@section('title', 'Pokemon detail')

@section('main-content')
    <div class="wrapper w-75 mx-auto">
        <div class="container-fluid">
            <div class="row p-4">

                <form action="{{ route('habitats.store') }}" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" required>
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>

                    <div class="mb-3">
                        <label for="image_url">Url dell'immagine</label>
                        <input type="text" name="image_url" id="image_url">
                    </div>

                    <div class="mb-3">
                        <label for="affinity_types">Affinity type</label>
                        <input type="text" name="affinity_types" id="affinity_types">
                    </div>

                    <div class="mb-3">
                        <label for="description">Description</label>
                        <input type="text" name="description" id="description">
                    </div>

                    <div class="mb-3">
                        <label for="avg_climate">Average Climate</label>
                        <input type="number" name="avg_climate" id="avg_climate">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
@endsection