@extends('layouts.app')
@section('title')
New Category
@endsection
@section('main_content')
        <h1>Write a New Category</h1>
        <form action="{{ route('categories.store')}}" method="post">
            @csrf
            <label for="title">Title</label>
            <input id="input_title" type="text" name="title" placeholder="Write here the title of your category">
            <button id="create_btn" type="submit">Publish</button>
        </form>
@endsection