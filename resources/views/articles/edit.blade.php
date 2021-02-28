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
                @error('title')
                    <div class="error_field_required">{{ $message }}</div>
                @enderror
                <label for="body">Body</label>
                <textarea cols="30" rows="10" id="input_body" type="text" name="body">{{ $article -> body }}</textarea>
                @error('body')
                    <div class="error_field_required">{{ $message }}</div>
                @enderror
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
                @error('category_id')
                    <div class="error_field_required">{{ $message }}</div>
                @enderror
                <div>
                    <label for="tags">Tags</label>
                    <select name="tags" id="tags[]" multiple>
                        @foreach ($tags as $tag)
                            <option value="{{ $tag -> id }}">{{ $tag -> title }}</option>    
                        @endforeach
                    </select>
                </div>
                @error('tags')
                    <div class="error_field_required">{{ $message }}</div>
                @enderror
                
                <div>
                    <button id="create_btn" type="submit">Edit</button>
                </div>
            </aside>
        </form>
@endsection