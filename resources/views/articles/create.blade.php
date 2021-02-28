@extends('layouts.app')
@section('title')
New Article
@endsection
@section('admin_bar')
    @include('layouts.admin_bar')
@endsection
@section('main_content')
        <h1>Write a New Article</h1>
        <form class="form_container" action="{{ route('articles.store')}}" method="post">
            @csrf
            <div class="draw_container">
                <label for="title">Title</label>
                <input id="input_title" type="text" name="title" placeholder="Write here the title of your post">
                @error('title')
                    <div class="error_field_required">{{ $message }}</div>
                @enderror
                <label for="author">Author</label>
                <input id="input_author" type="text" name="author" placeholder="Write here the author of your post">
                <label for="body">Body</label>
                <textarea cols="30" rows="10" id="input_body" type="text" name="body" placeholder="Write here the body of your post"></textarea>
                @error('body')
                    <div class="error_field_required">{{ $message }}</div>
                @enderror
            </div>
            <aside>
                <div>
                    <label for="category_id">Categories</label>
                    <select name="category_id" id="category_id" multiple>
                        @if ($categories)
                            @foreach ($categories as $cat)
                            <option value="{{ $cat -> id }}">{{ $cat -> title }}</option>    
                            @endforeach 
                        @endif
                    </select>
                </div>
                @error('category_id')
                    <div class="error_field_required">{{ $message }}</div>
                @enderror

                <div>
                    <label for="tags">Tags</label>
                    <select name="tags" id="tags[]" multiple>
                        @if ($tags)
                            @foreach ($tags as $tag)
                            <option value="{{ $tag -> id }}">{{ $tag -> title }}</option>    
                            @endforeach
                        @endif
                    </select>
                </div>
                @error('tags')
                    <div class="error_field_required">{{ $message }}</div>
                @enderror
                <div>
                    <button id="create_btn" type="submit">Publish</button>
                </div>
            </aside>
        </form>
@endsection