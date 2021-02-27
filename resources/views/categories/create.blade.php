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
            <label for="author">Author</label>
            <input id="input_author" type="text" name="author" placeholder="Write here the author of your post">
            <label for="body">Body</label>
            <textarea cols="30" rows="10" id="input_body" type="text" name="body" placeholder="Write here the body of your post"></textarea>

            <div>
                <label for="category_id">Categories</label>
                <select name="category_id" id="category_id" multiple>
                    @foreach ($categories as $cat)
                        <option value="{{ $cat -> id }}">{{ $cat -> title }}</option>    
                    @endforeach
                </select>
            </div>

            <div>
                <label for="tags">Tags</label>
                <select name="tags" id="tags" multiple>
                    @foreach ($tags as $tag)
                        <option value="{{ $tag -> id }}">{{ $tag -> title }}</option>    
                    @endforeach
                </select>
            </div>
            <button id="create_btn" type="submit">Publish</button>
        </form>
@endsection