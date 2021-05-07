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

                <h2>LE LUNGHE</h2>

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

                <h2>LE CORTE</h2>

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

                <h2>LE CORTISSIME</h2>

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
        <div class="container">
            <div class="column">
                <div class="footer__logo">
                    <img src="{{asset('img/marchio-sito-test.png')}}" alt="logo">
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique, quibusdam. Rerum, voluptates doloribus minima odio aspernatur ullam incidunt inventore ut beatae minus fuga, cupiditate exercitationem possimus dicta dolor quos quisquam?</p>
            </div>
            <div class="column">
                <h3>PASTIFICIO</h3>
                <ul>
                    <li><a href="#">Lorem ipsum dolor sit a</a></li>
                    <li><a href="#">Lorem ipsum dolor sit sum dolor sia</a></li>
                    <li><a href="#">Lorem ipsum dolor sit a</a></li>
                    <li><a href="#">Lorem ipsum dolor sit sum dolor sisum dolor sia</a></li>
                    <li><a href="#">Lorem ipsum dolor sitsum dolor si a</a></li>
                    <li><a href="#">Lorem ipsum dolor sit a</a></li>
                    <li><a href="#">Lorem ipsum dolorsum dolor si sit a</a></li>
                </ul>
                <h3>PRODOTTI</h3>
                <ul>
                    <li><a href="#">Lorem ipsum dolor sit a</a></li>
                    <li><a href="#">Lorem ipsum dolor sit sum dolor sia</a></li>
                    <li><a href="#">Lorem ipsum dolor sit a</a></li>
                    <li><a href="#">Lorem ipsum dolor sit sum dolor sisum dolor sia</a></li>
                    <li><a href="#">Lorem ipsum dolor sitsum dolor si a</a></li>
                    <li><a href="#">Lorem ipsum dolor sit a</a></li>
                    <li><a href="#">Lorem ipsum dolorsum dolor si sit a</a></li>
                </ul>
            </div>
            <div class="column">
                <h3>PRODOTTI</h3>
                <ul>
                    <li><a href="#">Lorem ipsum dolor sit a</a></li>
                    <li><a href="#">Lorem ipsum dolor sit sum dolor sia</a></li>
                    <li><a href="#">Lorem ipsum dolor sit a</a></li>
                    <li><a href="#">Lorem ipsum dolor sit sum dolor sisum dolor sia</a></li>
                </ul>
            </div>
        </div>

    </footer>
    
</body>
</html>