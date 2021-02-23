<div id="app">
    <header> 
        <nav>
            <ul>
                <li>
                    @foreach ($menu_link as $item)
                    <a href="{{ route($item['name']) }}" class="{{ Route::currentRouteName() === $item['name'] ? 'active' : '' }}">{{ $item['name'] }}</a>
                    @endforeach
                </li>
            </ul>
        </nav>   
    </header>
    