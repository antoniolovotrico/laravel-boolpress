@extends('layouts.app')
@section('title')
Show Category
@endsection
@section('admin_bar')
    @include('layouts.admin_bar')
@endsection
@section('main_content')
<h1>Show Category</h1>   
<table>
    <thead>
        <tr>
            <th class="id">ID</th>
            <th class="title">Title</th>
            <th class="created">Created</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="id">{{ $category -> id  }}</td>
            <td class="title">{{ $category -> title  }}</td>
            <td class="created">{{ $category -> created_at  }}</td>
        </tr>     
    </tbody>
</table>
@endsection