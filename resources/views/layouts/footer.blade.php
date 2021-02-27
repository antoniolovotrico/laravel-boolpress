<footer>
    <ul>
        <li>
            <a href="{{ route('articles_api') }}" class="{{ Route::currentRouteName() ===  'articles_api' ? 'active' : '' }}">ArticlesApi</a>
        </li>
        <li>
            <a href="{{ route('categories_api') }}" class="{{ Route::currentRouteName() ===  'categories_api' ? 'active' : '' }}">CategoriesApi</a>
        </li>
        <li>
            <a href="{{ route('tags_api') }}" class="{{ Route::currentRouteName() ===  'tags_api' ? 'active' : '' }}">TagsApi</a>
        </li>
    </ul>

</footer>
@yield('scriptJs')
</body>
</html> 