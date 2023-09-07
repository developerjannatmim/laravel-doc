@extends('public.layout')

@section('content')
<h1>All Public data</h1>
<div class="container">
  <div class="row">
    <div class="col-md-12 mt-3">
      <table class="table table-bordered table-striped">
        <div class="mb-3">
          <a class="btn btn-info" href="{{ route('public.create') }}">Create New Public</a>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
          {{ $message }}
        </div>
        @endif
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Age</th>
          <th>City Name</th>
          <th>Address</th>
          <th>Actions</th>
        </tr>
        <tr>
          @foreach($publics as $data)
          <td>{{ $data->name }}</td>
          <td>{{ $data->email }}</td>
          <td>{{ $data->age }}</td>
          <td>{{ $data->city }}</td>
          <td>{{ $data->address }}</td>
          <td>
            <form action="{{ route('public.destroy',$data->id) }}" method="POST">

              <a class="btn btn-info" href="{{ route('public.show',$data->id) }}">Show</a>

              <a class="btn btn-primary" href="{{ route('public.edit',$data->id) }}">Edit</a>

              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Delete</button>
          </form>
          </td>
        </tr>
        @endforeach
      </table>
      <div>
        {{ $publics->links() }}
      </div>
    </div>
  </div>
</div>

@endsection

