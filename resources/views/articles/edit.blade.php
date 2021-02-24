@extends('layouts.app')
@section('title')
Show Article
@endsection
@section('main_content')
<h1>Edit {{ $article -> title }}</h1>
        <form action="{{ route('articles.update', ['article'=> $article -> id])}}" method="post">
            @csrf
            @method('Put')
            <label for="title">Title</label>
            <input id="input_title" type="text" name="title" value="{{ $article -> title }}">
            <label for="body">Body</label>
            <textarea cols="30" rows="10" id="input_body" type="text" name="body">{{ $article -> body }}</textarea>
            <button id="create_btn" type="submit">Edit</button>
        </form>
@endsection