<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Molisana</title>
</head>
<body>
    {{-- header --}}
    @include('parts.header')
    {{-- fine header --}}

    <main>
        @yield('content');
    </main>

    @include('parts.footer')
    
</body>
</html>