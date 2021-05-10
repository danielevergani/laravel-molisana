@extends('template/main')

    @section('content')
    <div class="prodotto">
        <h1> {{$pasta['titolo']}} </h1>
        <img src="{{$pasta['src-h']}}" alt="">
        <img src="{{$pasta['src-p']}}" alt="{{$pasta['titolo']}}">
        <p>{!!$pasta['descrizione']!!}</p>


    </div>
    @endsection