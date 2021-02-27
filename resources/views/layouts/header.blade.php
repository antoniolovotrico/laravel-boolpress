
    <header> 
        <nav>
            <ul>
                <li>
                    @foreach ($menu_link as $item)
                    <a href="{{ route($item['name']) }}" class="{{ Route::currentRouteName() === $item['name'] ? 'active' : '' }}">{{ $item['name'] }}</a>
                    @endforeach
                    <a href="{{ route('articles.index') }}" class="{{ Route::currentRouteName() ===  'articles.index' ? 'active' : '' }}">ArticleAd</a>
                    <a href="{{ route('categories.index') }}" class="{{ Route::currentRouteName() ===  'categories.index' ? 'active' : '' }}">CategoryAd</a>
                    <a href="{{ route('tags.index') }}" class="{{ Route::currentRouteName() ===  'tags.index' ? 'active' : '' }}">TagAd</a>
                    <a href="{{ route('articles_api') }}" class="{{ Route::currentRouteName() ===  'articles_api' ? 'active' : '' }}">ArticlesApi</a>
                    <a href="{{ route('categories_api') }}" class="{{ Route::currentRouteName() ===  'categories_api' ? 'active' : '' }}">CategoriesApi</a>
                    <a href="{{ route('tags_api') }}" class="{{ Route::currentRouteName() ===  'tags_api' ? 'active' : '' }}">TagsApi</a>
                </li>
            </ul>
        </nav>   
    </header>
    