<header>
    <div id="index-header">
        <img src="{{  asset("images/la-molisana-logo.png")}} " alt="La Molisana main logo">
        <nav>
            <ul>
                @foreach ($links as $link)
                    <li
                    class="{{ Route::currentRouteName() == $link['route-name'] ? 'active' : ''}}">
                        <a href="{{ route($link['route-name']) }}">
                            {{ $link['title'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>