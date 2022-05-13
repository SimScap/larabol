@extends('layouts.main')

@section('title', 'Books')

@section('main-content')
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>Libbbri di {{ $gina }} :</h1>
                </div>
                @foreach ($books as $book)
                    <div class="col-4">
                        <div class="card p-3 m-3" style="width: 18rem;">
                            <div class="card-body">
                            <h5 class="card-title">
                                {{ $book->title }}
                            </h5>
                            <h6 class="card-subtitle mb-2 text-muted">
                                Pubblicazione: {{ $book->publication_date }}
                            </h6>
                            <p class="card-text">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt itaque eveniet deleniti dicta laborum sit odit eos neque fugiat. Deserunt enim atque sit nobis aperiam incidunt blanditiis doloribus at velit.
                            </p>
                            <a href="#" class="card-link">
                                {{ $book->isbn13 }}
                            </a>
                            </div>
                        </div>
                    </div>
                    @endforeach

            </div>
        </div>

    </main>
@endsection

