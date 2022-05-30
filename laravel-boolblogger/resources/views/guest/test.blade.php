@php
    use Carbon\Carbon;
@endphp


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Testing Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>Pagina di testing manuale:</h1>

                    <pre>
                        @php
                            var_dump("");
                        @endphp
                    </pre>
                    @dump(Carbon::createFromDate(1993, 4,1)->locale('it')->dayName)
                </div>
            </div>
        </div>

        {{-- <script src="{{ asset('js/admin.js') }}" ></script> --}}
    </body>
</html>
