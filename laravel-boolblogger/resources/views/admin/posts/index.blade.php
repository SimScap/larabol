@extends('layouts.app')

@section('content')
    <div class="container-fluid w-75 mx-auto">
        <div class="row">
            @if(session('deleted-message'))
                <div class="col-12">
                    <div class="alert alert-warning">
                        {{session('deleted-message')}}
                    </div>
                </div>
            @endif
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Created</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($posts as $post)
                        <tr>
                            <td>
                                <a href="{{route("admin.posts.show", $post)}}">
                                    {{ $post->title }}
                                </a>
                            </td>
                            <td>
                                {{ $post->author }}
                            </td>
                            <td>
                                {{ $post->created_at }}
                            </td>
                            <td class="d-flex">
                                <a href="{{ route("admin.posts.edit", $post) }}" class="btn btn-success btn-sm me-2" >Edit</a>

                                <form action="{{route('admin.posts.destroy', $post)}}" method="POST" class="post-form-destroyer" post-title="{{$post->title}}">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"  class="btn btn-danger btn-sm ">Delete</a>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">There are no posts to show</td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
@endsection


@section('footer-scripts')
    <script defer>
        const deleteForms = document.querySelectorAll('.post-form-destroyer');
        console.log(deleteForms);
        deleteForms.forEach(singleForm => {
            singleForm.addEventListener('submit', function (event) {
                event.preventDefault(); // § blocchiamo l'invio del form
                userConfirmation = window.confirm(`Sei sicuro di voler eliminare ${this.getAttribute('post-title')}?` );
                if (userConfirmation) {
                    this.submit();
                }
            })
        });
    </script>
@endsection