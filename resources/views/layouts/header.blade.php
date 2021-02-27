
    <header> 
        <nav>
            <ul>
                @foreach ($menu_link as $item)
                <li>
                    <a href="{{ route($item['name']) }}" class="{{ Route::currentRouteName() === $item['name'] ? 'active' : '' }}">{{ $item['name'] }}</a>
                </li>
                @endforeach
                <li>
                    <a href="{{ route('articles.index') }}" class="{{ Route::currentRouteName() ===  'articles.index' ? 'active' : '' }}">ArticleAd</a>
                </li> 
                <li>
                    <a href="{{ route('categories.index') }}" class="{{ Route::currentRouteName() ===  'categories.index' ? 'active' : '' }}">CategoryAd</a>
                </li> 
                <li> 
                    <a href="{{ route('tags.index') }}" class="{{ Route::currentRouteName() ===  'tags.index' ? 'active' : '' }}">TagAd</a> 
                </li>
            </ul>
        </nav>   
    </header>
    