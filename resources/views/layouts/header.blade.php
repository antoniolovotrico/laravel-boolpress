
    <header> 
        <nav>
            <ul>
                <li>
                    @foreach ($menu_link as $item)
                    <a href="{{ route($item['name']) }}" class="{{ Route::currentRouteName() === $item['name'] ? 'active' : '' }}">{{ $item['name'] }}</a>
                    @endforeach
                    <a href="{{ route('articles.index') }}" class="{{ Route::currentRouteName() ===  'articles.index' ? 'active' : '' }}">Admin</a>
                    <a href="{{ route('articles_api') }}" class="{{ Route::currentRouteName() ===  'articles_api' ? 'active' : '' }}">Api</a>
                </li>
            </ul>
        </nav>   
    </header>
    