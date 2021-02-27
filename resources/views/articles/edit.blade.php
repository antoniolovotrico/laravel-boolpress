@extends('layouts.app')
@section('title')
Edit Article
@endsection
@section('main_content')
<h1>Edit {{ $article -> title }}</h1>
        <form class="form_container" action="{{ route('articles.update', ['article'=> $article -> id])}}" method="post">
            @csrf
            @method('Put')
            <div class="draw_container">
                <label for="title">Title</label>
                <input id="input_title" type="text" name="title" value="{{ $article -> title }}">
                <label for="body">Body</label>
                <textarea cols="30" rows="10" id="input_body" type="text" name="body">{{ $article -> body }}</textarea>
            </div>
            <aside>
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
                <div>
                    <button id="create_btn" type="submit">Edit</button>
                </div>
            </aside>
        </form>
@endsection