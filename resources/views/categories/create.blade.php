@extends('layouts.app')
@section('title')
New Category
@endsection
@section('main_content')
        <h1>Write a New Category</h1>
        <form class="form_container" action="{{ route('categories.store')}}" method="post">
            @csrf
            <div class="draw_container">
                <label for="title">Title</label>
                <input id="input_title" type="text" name="title" placeholder="Write here the title of your category">
                <button id="create_btn" type="submit">Publish</button>
            </div>
        </form>
@endsection