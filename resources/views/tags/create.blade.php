@extends('layouts.app')
@section('title')
New Tag
@endsection
@section('admin_bar')
    @include('layouts.admin_bar')
@endsection
@section('main_content')
        <h1>Write a New Tag</h1>
        <form  class="form_container" action="{{ route('tags.store')}}" method="post">
            @csrf
            <div class="draw_container">
                <label for="title">Title</label>
                <input id="input_title" type="text" name="title" placeholder="Write here the title of your Tag">
                <button id="create_btn" type="submit">Publish</button>
            </div>
            @error('title')
                <div class="error_field_required">{{ $message }}</div>
            @enderror
        </form>
@endsection