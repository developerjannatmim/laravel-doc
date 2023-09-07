@extends('blog.layout')

@section('content')
<h1>All Blog </h1>
<div class="container">
  <div class="row">
    <div class="col-md-12 mt-3">
      <table class="table table-bordered table-striped">
        <div class="mb-3">
          <a class="btn btn-info" href="{{ route('blog.create') }}">Create New Blog</a>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
          {{ $message }}
        </div>
        @endif
        <tr>
          <th>Title</th>
          <th>Text Body</th>
          <th>Actions</th>
        </tr>
        <tr>
          @foreach($blogs as $data)
          <td>{{ $data->title }}</td>
          <td>{{ $data->body }}</td>
          <td>
            <form action="{{ route('blog.destroy', $data->id) }}" method="POST">

              <a class="btn btn-info" href="{{ route('blog.show', $data->id) }}">Show</a>

              <a class="btn btn-primary" href="{{ route('blog.edit', $data->id) }}">Edit</a>

              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Delete</button>
          </form>
          </td>
        </tr>
        @endforeach
      </table>
      <div>
        {{ $blogs->links() }}
      </div>
    </div>
  </div>
</div>

@endsection

