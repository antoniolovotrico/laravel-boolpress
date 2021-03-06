@extends('layouts.app')
@section('title')
Edit Tag
@endsection
@section('admin_bar')
    @include('layouts.admin_bar')
@endsection
@section('main_content')
<h1>Edit {{ $tag -> title }}</h1>
        <form class="form_container" action="{{ route('tags.update', ['tag'=> $tag -> id])}}" method="post">
            @csrf
            @method('Put')
            <div class="draw_container">
                <label for="title">Title</label>
                <input id="input_title" type="text" name="title" value="{{ $tag -> title }}">
                <button id="create_btn" type="submit">Edit</button>
            </div>
            @error('title')
                <div class="error_field_required">{{ $message }}</div>
            @enderror
        </form>
@endsection