@extends('layouts.main')

@section('title', 'Pokemon list')

@section('main-content')


    <div class="wrapper w-75 mx-auto">
        <div class="container-fluid">
            <div class="row p-2">

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
                            <td>
                                <button class="btn btn-success"> edit </button>
                                <button class="btn btn-danger"> del </button>
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