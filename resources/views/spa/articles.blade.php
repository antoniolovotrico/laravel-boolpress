@extends('layouts.app')
@section('title')
articles
@endsection
@section('main_content')
<div class="main_container">
   <h1>Articles</h1>
</div>

<div id="app">
   <articles-component></articles-component>
</div>


@endsection

@section('scriptJs')
<script  src="{{ asset('js/app.js') }}"></script>
@endsection