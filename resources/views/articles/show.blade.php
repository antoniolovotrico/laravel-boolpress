@extends('layouts.app')
@section('title')
Show Article
@endsection
@section('main_content')
<h1>Show Article</h1>   
<table>
    <thead>
        <tr>
            <th class="id">ID</th>
            <th class="title">Title</th>
            <th class="body">Body</th>
            <th class="created">Created</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="id">{{ $article -> id  }}</td>
            <td class="title">{{ $article -> title  }}</td>
            <td class="body">{{ $article -> body  }}</td>
            <td class="created">{{ $article -> created_at  }}</td>
        </tr>     
    </tbody>
</table>
@endsection