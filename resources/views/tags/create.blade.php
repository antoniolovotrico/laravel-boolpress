@extends('layouts.app')
@section('title')
New Tag
@endsection
@section('main_content')
        <h1>Write a New Tag</h1>
        <form action="{{ route('tags.store')}}" method="post">
            @csrf
            <label for="title">Title</label>
            <input id="input_title" type="text" name="title" placeholder="Write here the title of your Tag">
            
            <button id="create_btn" type="submit">Publish</button>
        </form>
@endsection