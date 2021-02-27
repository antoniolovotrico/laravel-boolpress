@extends('layouts.app')
@section('title')
Show Tag
@endsection
@section('main_content')
<h1>Show Tag</h1>   
<table>
    <thead>
        <tr>
            <th class="id">ID</th>
            <th class="title">Title</th>
            <th class="created">Created</th>
    </thead>
    <tbody>
        <tr>
            <td class="id">{{ $tag -> id  }}</td>
            <td class="title">{{ $tag -> title  }}</td>
            <td class="created">{{ $tag -> created_at  }}</td>     
        </tr>     
    </tbody>
</table>
@endsection