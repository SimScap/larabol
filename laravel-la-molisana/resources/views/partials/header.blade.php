<header>
    <div id="index-header">
        <img src="{{asset("images/la-molisana-logo.png")}}" alt="La Molisana main logo">
        <nav>
            <ul>
                <li>
                    <a href="{{ url('/') }}">
                        Home
                    </a>
                </li>
                <li class="active">
                    <a  href="{{ route('products-page') }}">
                        Prodotti
                    </a>
                </li>
                <li>
                    <a href="{{ url('/') }}">
                        News
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>