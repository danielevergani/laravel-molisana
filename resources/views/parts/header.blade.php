<header>
   
    <div class="logo">
        <img src="{{asset('img/marchio-sito-test.png')}}" alt="logo">
    </div>
    <nav>
        <ul>
            <li class="{{ Route::getCurrentRoute()->getName() == 'home' ? 'active' : '' }}"><a href="{{route('home')}}">Home</a></li>
            <li class="{{ Route::getCurrentRoute()->getName() == 'prodotti' ? 'active' : '' }}"><a href="{{route("prodotti", ['id' => 0])}} ">Prodotti</a></li>
            <li class="{{ Route::getCurrentRoute()->getName() == 'news' ? 'active' : '' }}"><a href="{{route('news')}}">News</a></li>
        </ul>
    </nav>
</header>