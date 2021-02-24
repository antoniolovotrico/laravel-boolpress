@extends('layouts.app')
@section('title')
articles
@endsection
@section('main_content')
<div class="main_container">
   <h1>articles</h1>
   <table>
      <thead>
          <tr>
              <th class="id">ID</th>
              <th class="title">Title</th>
              <th class="body">Body</th>
              <th class="created">Created</th>
              <th class="updated">Update</th>
              <th class="action">Action</th>
          </tr>
      </thead>
      <tbody>
          @foreach ($articles as $item)
          <tr>
              <td class="id">{{ $item -> id  }}</td>
              <td class="title">{{ $item -> title  }}</td>
              <td class="body">{{ $item -> body  }}</td>
              <td class="created">{{ $item -> created_at  }}</td>
              <td class="updated">{{ $item -> updated_at  }}</td>
              <td class="action">
                  <a href="{{ route('articles.show', ['article' => $item -> id]) }}">
                      <button>View</button>
                  </a>
                  <a href="{{ route('articles.edit', ['article' => $item -> id]) }}">
                      <button>Edit</button>
                  </a>
                  <form action="{{ route('articles.destroy', ['article' => $item -> id]) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button>Delete</button>
                  </form>   
              </td>
          </tr>     
          @endforeach
      </tbody>
  </table>
          
  
  <a href="{{ route('articles.create') }}"><button id="create_btn">New Post</button></a>
</div>
@endsection