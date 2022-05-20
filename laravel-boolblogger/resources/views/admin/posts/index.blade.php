@extends('layouts.app')

@section('content')
    <div class="container-fluid w-75 mx-auto">
        <div class="row">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Created</th>
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

