
@extends('template/main')

    @section('title')
        Molisana Home Page
    @endsection
    
    @section('content')
    {{-- paste lunghe --}}
    <section>
        <div class="container">

            <h2>LE LUNGHE</h2>

            <div class="pasta__wrap">

                @foreach ($lunga as $pasta)
                <div class="pasta__box">
                    <a href="{{route('prodotti', ['id' => $pasta['id'] ])}}"><img src="{{ $pasta['src'] }}" alt=""></a>
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
                    <a href="{{route('prodotti', ['id' => $pasta['id'] ])}} "><img src="{{ $pasta['src'] }}" alt=""></a>
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
                    <a href="{{route('prodotti', ['id' => $pasta['id'] ])}} "><img src="{{ $pasta['src'] }}" alt=""></a>
                </div>
                @endforeach
            
            </div>
            
        </div>

    </section>

    @endsection

    