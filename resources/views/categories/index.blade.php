@extends('layouts.app')
@section('title')
categories
@endsection
@section('main_content')
<div class="main_container">
   <h1>Categories</h1>
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
          @foreach ($categories as $category)
          <tr>
              <td class="id">{{ $category -> id  }}</td>
              <td class="title">{{ $category -> title  }}</td>
              <td class="created">{{ $category -> created_at  }}</td>
              <td class="updated">{{ $category -> updated_at  }}</td>
              <td class="action">
                  <a href="{{ route('categories.show', ['category' => $category -> id]) }}">
                      <button id="view_btn">View</button>
                  </a>
                   
                  <a href="{{ route('categories.edit', ['category' => $category -> id]) }}">
                      <button id="edit_btn">Edit</button>
                  </a>
                  <form action="{{ route('categories.destroy', ['category' => $category -> id]) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button id="delete_btn">Delete</button>
                  </form>
              </td>
          </tr>     
          @endforeach
      </tbody>
  </table>
          
  
  <a href="{{ route('categories.create') }}"><button id="create_btn">New Category</button></a>
</div>
@endsection