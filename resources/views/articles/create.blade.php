@extends('layouts.app')
@section('title')
New Article
@endsection
@section('main_content')
        <h1>Write a New Article</h1>
        <form action="{{ route('articles.store')}}" method="post">
            @csrf
            <label for="title">Title</label>
            <input id="input_title" type="text" name="title" placeholder="Write here the title of your post">
            <label for="body">Body</label>
            <textarea cols="30" rows="10" id="input_body" type="text" name="body" placeholder="Write here the body of your post"></textarea>
            <button id="create_btn" type="submit">Publish</button>
        </form>
@endsection