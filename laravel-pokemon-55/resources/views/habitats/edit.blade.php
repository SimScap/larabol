
@extends('layouts.main')

@section('title', 'Pokemon detail')

@section('main-content')
    <div class="wrapper w-75 mx-auto">
        <div class="container-fluid">
            <div class="row p-4">

                {{-- ? Per ogni valore rilevante ai fini del salvataggio abbiamo creato: --}}
                {{-- # Un campo modificabile (tipicamente un input) in cui l'utente può inserire i contenuti --}}
                {{-- § Un attributo del campo relativo di input chiamato "name" che ci consente di recupare il valore dal controller --}}
                <form action="{{ route('habitats.update',  $habitat->id) }}" method="post">
                    @csrf

                    {{-- § specifichiamo il vero metodo da utilizzare --}}
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" value="{{ $habitat->name }}" required>
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>

                    <div class="mb-3">
                        <label for="image_url">Url dell'immagine</label>
                        <input type="text" name="image_url" id="image_url" value="{{ $habitat->image_url }}">
                    </div>

                    <div class="mb-3">
                        <label for="affinity_types">Affinity type</label>
                        <input type="text" name="affinity_types" id="affinity_types" value="{{ $habitat->affinity_types }}">
                    </div>

                    <div class="mb-3">
                        <label for="description">Description</label>
                        <input type="text" name="description" id="description" value="{{ $habitat->description }}">
                    </div>

                    <div class="mb-3">
                        <label for="avg_climate">Average Climate</label>
                        <input type="number" name="avg_climate" id="avg_climate" value="{{ $habitat->avg_climate }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                {{-- @dump($habitat) --}}
            </div>
        </div>
    </div>
@endsection