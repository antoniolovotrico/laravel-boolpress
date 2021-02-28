
    <header> 
        <nav>
            <ul>
                @foreach ($menu_link as $item)
                <li>
                    <a href="{{ route($item['name']) }}" class="{{ Route::currentRouteName() === $item['name'] ? 'active' : '' }}">{{ $item['name'] }}</a>
                </li>
                @endforeach
            </ul>
        </nav>   
    </header>
    