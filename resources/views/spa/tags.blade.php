@extends('layouts.app')
@section('title')
TagsApi
@endsection
@section('main_content')
<div class="main_container">
   <h1>TagsApi</h1>
</div>

<div id="app">
   <tags-component></tags-component>
</div>


@endsection

@section('scriptJs')
<script  src="{{ asset('js/app.js') }}"></script>
@endsection