@extends('layouts.app')
@section('title')
Edit Category
@endsection
@section('main_content')
<h1>Edit {{ $category -> title }}</h1>
        <form action="{{ route('categories.update', ['category'=> $category -> id])}}" method="post">
            @csrf
            @method('Put')
            <label for="title">Title</label>
            <input id="input_title" type="text" name="title" value="{{ $category -> title }}">
            <button id="create_btn" type="submit">Edit</button>
        </form>
@endsection