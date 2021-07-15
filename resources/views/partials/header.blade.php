<header>
    <div class="container">
        <h1>I viaggi di Gianni!</h1>
        <nav>
            <ul>
                <li><a href="{{route('home')}}" class="{{Route::currentRouteName() == 'home'?'active':''}}">Home</a></li>
                <li><a href="{{route('viaggi')}}" class="{{Route::currentRouteName() == 'viaggi'?'active':''}}">Viaggi</a></li>
                <li><a href="{{route('contatti')}}" class="{{Route::currentRouteName() == 'contatti'?'active':''}}">Contatti</a></li>
            </ul>
        </nav>
    </div>
</header>