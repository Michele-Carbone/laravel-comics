<header>
    <div class="header-top">
        <div class="container">
            <div>DC POWER&trade; VISA&reg;</div>
            <div>ADDITIONAL DC SITES <i class="fas fa-caret-down"></i></div>
        </div>
    </div>
    <div class="header-nav container">
        <img src="{{asset('images/dc-logo.png')}}" alt="DC comics">
        <nav>
            <ul>
                <li><a href="{{ route('characters')}}">CHARACTERS</a></li>
                <li><a href="">COMICS</a></li>
                <li><a href="{{ route('movies')}}">MOVIES</a></li>
                <li><a href="">TV</a></li>
                <li><a href="">GAMES</a></li>
                <li><a href="">COLLECTIBLES</a></li>
                <li><a href="">VIDEOS</a></li>
                <li><a href="">FANS</a></li>
                <li><a href="">NEWS</a></li>
                <li><a href="">SHOP <i class="fas fa-caret-down"></i></a></li>
            </ul>
        </nav>
        <div class="search">
            <input type="text" id="search" placeholder="Search...">
            <i class="fas fa-search"></i>
        </div>
    </div>
    <div class="header-jumbotron">
    </div>
</header>