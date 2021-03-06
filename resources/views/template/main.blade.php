<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @yield('fontAwesomeCdn')
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>@yield('title')</title>
        @yield('css');

    </head>
    <body>
        {{-- header --}}
        @include('parts.header')
        {{-- fine header --}}

        <main>
            @yield('content')
        </main>

        {{-- footer --}}
        @include('parts.footer')
        {{-- fine footer --}}

        
    </body>
</html>