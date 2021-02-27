@extends('layouts.app')
@section('title')
categoriesApi
@endsection
@section('main_content')
<div class="main_container">
   <h1>CategoriesApi</h1>
</div>

<div id="app">
   <categories-component></categories-component>
</div>


@endsection

@section('scriptJs')
<script  src="{{ asset('js/app.js') }}"></script>
@endsection