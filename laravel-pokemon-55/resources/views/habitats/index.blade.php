@extends('layouts.main')

@section('title', 'Pokemon list')

@section('main-content')


    <div class="wrapper w-75 mx-auto">
        <div class="container-fluid">
            <div class="row p-2">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('deleted-message'))
                    <div class="alert alert-warning">
                        {{ session('deleted-message') }}
                    </div>
                @endif

                <table class="table table-dark table-hover p-1">
                    <thead>
                        <tr>
                            {{-- <th scope="col">#</th> --}}
                            <th scope="col" colspan="2">Name</th>
                            <th scope="col">Types</th>
                            <th scope="col">Average Climate</th>
                            <th scope="col">
                                <a href="{{route('habitats.create')}}">
                                    <button  class="btn btn-warning btn-sm"> Nuovo habitat </button>
                                </a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($habitats as $habitat)
                        <tr>
                            <td colspan="2">
                                <a href='{{route("habitats.show",$habitat->id)}}'>
                                    {{ ucfirst($habitat->name) }}
                                </a>
                            </td>
                            <td>
                                {{$habitat->affinity_types }}
                            </td>
                            <td>
                                {{$habitat->avg_climate }}
                            </td>
                            <td class="d-flex">
                                <a href="{{route("habitats.edit", $habitat)}}" class="me-2">
                                    <button class="btn btn-success btn-sm"> modifica </button>
                                </a>

                                {{-- route("habitats.destroy", $habitat --}}
                                <form action="{{route('habitats.destroy', $habitat)}}" method="POST" class="habitat-destroyer" habitat-name="{{ucfirst($habitat->name)}}">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger btn-sm">
                                        elimina
                                    </button>
                                </form>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>


                <div class="col-8">
                    {{$habitats->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection


@section('footer-scripts')
    <script>
        const deleteForms = document.querySelectorAll('.habitat-destroyer');
        deleteForms.forEach(singleForm => {
            singleForm.addEventListener('submit', function (event) {
                event.preventDefault(); // § blocchiamo l'invio del form
                userConfirmation = window.confirm(`Sei sicuro di voler eliminare ${this.getAttribute('habitat-name')}?` );
                if (userConfirmation) {
                    this.submit();
                }
            })
        });
    </script>
@endsection