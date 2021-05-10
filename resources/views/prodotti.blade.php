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
        <img src="{{$pasta['src-p']}}" alt="{{$pasta['titolo']}}">
        <div class="description">
            <p>{!!$pasta['descrizione']!!}</p>
        </div>
    </div>
    @endsection