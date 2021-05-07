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
    <header>
        <div class="logo">
            <img src="{{asset('img/marchio-sito-test.png')}}" alt="logo">
        </div>
        <nav>
            <ul>
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Prodotti</a></li>
                <li><a href="#">News</a></li>
            </ul>
        </nav>
    </header>
    {{-- fine header --}}

    <main>
        {{-- paste lunghe --}}
        <section>
            <div class="container">

                <h2>Le Lunghe</h2>

                <div class="pasta__wrap">

                    @foreach ($lunga as $pasta)
                    <div class="pasta__box">
                        <img src="{{ $pasta['src'] }}" alt="">
                    </div>
                    @endforeach
                
                </div>
                
            </div>
        </section>

        {{-- paste corte --}}
        <section>
            <div class="container">

                <h2>Le Corte</h2>

                <div class="pasta__wrap">

                    @foreach ($corta as $pasta)
                    <div class="pasta__box">
                        <img src="{{ $pasta['src'] }}" alt="">
                    </div>
                    @endforeach
                
                </div>
                
            </div>

        </section>

        {{-- paste cortissime --}}
        <section>
            <div class="container">

                <h2>Le cortissime</h2>

                <div class="pasta__wrap">

                    @foreach ($cortissima as $pasta)
                    <div class="pasta__box">
                        <img src="{{ $pasta['src'] }}" alt="">
                    </div>
                    @endforeach
                
                </div>
                
            </div>

        </section>


    </main>

    <footer>

    </footer>
    
</body>
</html>