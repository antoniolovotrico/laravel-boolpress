@include('layouts.head')
@include('layouts.header')

<main>
    @yield('main_content')
</main> 
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>          

       