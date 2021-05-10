
@extends('template/main')
    {{-- header --}}
    {{-- @include('parts.header') --}}
    {{-- fine header --}}

    
        @section('content')
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

        @endsection

    {{-- @include('parts.footer') --}}
    