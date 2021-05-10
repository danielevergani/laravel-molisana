@section('fontAwesomeCdn')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
@endsection

@extends('template/main')

@section('css')
<style>
    
    main{
        background-image: none;
    }

</style>
@endsection

    @section('content')
    <div class="prodotto">
        <h1 class="prod__name"> {{$pasta['titolo']}} </h1>
        <img src="{{$pasta['src-h']}}" alt="">
        <div class="arrows">
            <div class="arrow prev">
                <a href="{{route('prodotti', ['id' => $prev ])}}"><i class="fas fa-chevron-left"></i></a>
            </div>
            <div class="arrow next">
                <a href="{{route('prodotti', ['id' => $next ])}}"><i class="fas fa-chevron-right"></i></a>
            </div>
        </div>
        <img src="{{$pasta['src-p']}}" alt="{{$pasta['titolo']}}">
        <div class="description">
            <p>{!!$pasta['descrizione']!!}</p>
        </div>
    </div>
    @endsection