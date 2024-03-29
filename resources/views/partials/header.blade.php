<header>
    <div class="bg-primary">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-6 col-md-4 col-lg-3">
                    <span class="text-white">DC POWER&#8480; VISA&#174;</span>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <span class="text-white">ADDITIONAL DC SITES &#9662;</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-2">
        <div class="row">
            <div class="col-2">
                <div class="logo">
                    <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="logo">
                </div>
            </div>
            <div class="col-10">
                <ul class="my-list">
                    <li><a href="{{ route('characters') }}">CHARACTERS</a></li>
                    <li><a href="{{ route('comics') }}" class="">COMICS</a></li>
                    <li><a href="{{ route('movies') }}" class="">MOVIES</a></li>
                    <li><a href="{{ route('tv') }}" class="">TV</a></li>
                    <li><a href="{{ route('games') }}" class="">GAMES</a></li>
                    <li><a href="{{ route('collectibles') }}" class="">COLLECTIBLES</a></li>
                    <li><a href="{{ route('videos') }}" class="">VIDEOS</a></li>
                    <li><a href="{{ route('fans') }}" class="">FANS</a></li>
                    <li><a href="{{ route('news') }}" class="">NEWS</a></li>
                    <li><a href="{{ route('shop') }}" class="">SHOP</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
