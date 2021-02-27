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
            <th class="category">Category</th>
            <th class="tag">Tag</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="id">{{ $article -> id  }}</td>
            <td class="title">{{ $article -> title  }}</td>
            <td class="body">{{ $article -> body  }}</td>
            <td class="created">{{ $article -> created_at  }}</td>
            <td class="category">Category:{{ $article -> category ?$article->category->title : 'N/A' }}</td>
            <td class="tag">Tag:
                {{-- seci sono tag mostrami i tag --}}
                @if (count($article -> tags) > 0)
                    @foreach ($article -> tags as $tag)
                    {{ $tag -> title }}    
                    @endforeach
                @else
                    Non ho inserito nessun tag
                @endif
        </tr>     
    </tbody>
</table>
@endsection