@extends('layouts.app')
@section('title')
tags
@endsection
@section('admin_bar')
    @include('layouts.admin_bar')
@endsection
@section('main_content')
<h1>Tags</h1>

<a href="{{ route('tags.create') }}"><button id="create_btn">New Tag</button></a>
       
   <table>
      <thead>
          <tr>
              <th class="id">ID</th>
              <th class="title">Title</th>
              <th class="created">Created</th>
              <th class="updated">Update</th>
              <th class="action">Action</th>
          </tr>
      </thead>
      <tbody>
          @foreach ($tags as $tag)
          <tr>
              <td class="id">{{ $tag -> id  }}</td>
              <td class="title">{{ $tag -> title  }}</td>
              <td class="created">{{ $tag -> created_at  }}</td>
              <td class="updated">{{ $tag -> updated_at  }}</td>
              <td class="action">
                 <a href="{{ route('tags.show', ['tag' => $tag -> id]) }}">
                      <button class="view_btn">View</button>
                  </a> 
                  <a href="{{ route('tags.edit', ['tag' => $tag -> id]) }}">
                      <button class="edit_btn">Edit</button>
                  </a>
                  <form action="{{ route('tags.destroy', ['tag' => $tag -> id]) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button class="delete_btn">Delete</button>
                  </form>
              </td>
          </tr>     
          @endforeach
      </tbody>
  </table>
@endsection