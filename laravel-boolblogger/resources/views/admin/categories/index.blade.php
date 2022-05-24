@extends('layouts.app')

@section('content')
    <div class="container-fluid w-75 mx-auto" id="categories-wrapper">
        <div class="row">
            @if(session('deleted-message'))
                <div class="col-12">
                    <div class="alert alert-warning">
                        {{session('deleted-message')}}
                    </div>
                </div>
            @endif

            @if(session('message'))
                <div class="col-12">
                    <div class="alert alert-success">
                        {{session('message')}}
                    </div>
                </div>
            @endif

            <div class="col-12">
                <a href="{{route('admin.categories.create')}}" class="btn btn-primary">Crea una nuova categoria</a>
            </div>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Category</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($categories as $category)
                        <tr>
                            <td style="background-color: {{$category->color}}">
                                <a href="{{route("admin.categories.show", $category)}}">
                                    {{ $category->name }}
                                </a>
                            </td>

                            <td class="d-flex">
                                <a href="{{ route("admin.categories.edit", $category) }}" class="btn btn-success btn-sm me-2" >Edit</a>


                                <form action="{{route('admin.categories.destroy', $category)}}" method="POST" class="category-form-destroyer" category-title="{{$category->name}}">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"  class="btn btn-danger btn-sm ">Delete</a>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">Non ci sono categorie da mostrare</td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
@endsection


@section('footer-scripts')
    <script defer>
        const deleteForms = document.querySelectorAll('.category-form-destroyer');
        console.log(deleteForms);
        deleteForms.forEach(singleForm => {
            singleForm.addEventListener('submit', function (event) {
                event.preventDefault(); // § blocchiamo l'invio del form
                userConfirmation = window.confirm(`Sei sicuro di voler eliminare ${this.getAttribute('category-title')}?` );
                if (userConfirmation) {
                    this.submit();
                }
            })
        });
    </script>
@endsection
