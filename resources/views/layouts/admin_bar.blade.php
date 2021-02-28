<div class="admin_bar"> 
    <nav>
        <ul>
            <li>
                <a href="{{ route('articles.index') }}" class="{{ Route::currentRouteName() ===  'articles.index' ? 'active' : '' }}"><button><i class="fas fa-tools"></i>Article</button> </a>
            </li> 
            <li>
                <a href="{{ route('categories.index') }}" class="{{ Route::currentRouteName() ===  'categories.index' ? 'active' : '' }}"><button><i class="fas fa-tools"></i>Category</button></a>
            </li> 
            <li> 
                <a href="{{ route('tags.index') }}" class="{{ Route::currentRouteName() ===  'tags.index' ? 'active' : '' }}"><button><i class="fas fa-tools"></i>Tag</button></a> 
            </li>
        </ul>
    </nav>   
</div>