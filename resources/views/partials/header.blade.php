<header class="h-100">

    <div class="my-container d-flex justify-content-between align-items-center h-100">

        <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="logo">

        <div class="d-flex justify-content-between align-items-center p-4 h-100">

                <a class="text-uppercase h-100" href="#">characters</a>

                <a class="text-uppercase h-100 nav-link {{Route::currentRouteName() == 'comics' ? 'activeLink': ''}}" href="{{route('comics')}}">comics</a>

                <a class="text-uppercase h-100" href="#">movies</a>

                <a class="text-uppercase h-100" href="#">tv</a>

                <a class="text-uppercase h-100" href="#">games</a>

                <a class="text-uppercase h-100" href="#">collectibles</a>

                <a class="text-uppercase h-100" href="#">videos</a>

                <a class="text-uppercase h-100" href="#">fans</a>

                <a class="text-uppercase h-100" href="#">news</a>

                <a class="text-uppercase h-100" href="#">shop</a>

        </div>

        <div class="container-search">
            <span>Search</span>
            <span><i class="fa-solid fa-magnifying-glass"></i></span>
        </div>

    </div>

    <div class="jumbo position-relative">
        {{-- img di background --}}
    </div>
</header>
