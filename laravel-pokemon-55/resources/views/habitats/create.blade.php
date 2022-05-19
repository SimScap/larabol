
@extends('layouts.main')

@section('title', 'Pokemon detail')

@section('main-content')
    <div class="wrapper w-75 mx-auto">
        <div class="container-fluid">
            <div class="row p-4">
                {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif --}}
            </div>
            <div class="row p-4">

                {{-- ? Per ogni valore rilevante ai fini del salvataggio abbiamo creato: --}}
                {{-- # Un campo modificabile (tipicamente un input) in cui l'utente può inserire i contenuti --}}
                {{-- § Un attributo del campo relativo di input chiamato "name" che ci consente di recupare il valore dal controller --}}
                <form action="{{ route('habitats.store') }}" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        @error('name')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="image_url">Url dell'immagine</label>
                        <input type="text" name="image_url" id="image_url">
                        @error('image_url')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="affinity_types">Affinity type</label>
                        <input type="text" name="affinity_types" id="affinity_types">
                        @error('affinity_types')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>

                    <div class="mb-3">
                        <label for="description">Description</label>
                        <input type="text" name="description" id="description">
                        @error('description')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>

                    <div class="mb-3">
                        <label for="avg_climate">Average Climate</label>
                        <input type="number" name="avg_climate" id="avg_climate">
                        @error('avg_climate')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
@endsection