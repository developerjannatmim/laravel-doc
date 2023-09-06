@extends('students.layout')

@section('content')
<h1>All Student data</h1>
<div class="container">
  <div class="row">
    <div class="col-md-12 mt-3">
      <table class="table table-bordered table-striped">
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Age</th>
          <th>City Name</th>
          <th>Address</th>
        </tr>
        <tr>
          @foreach($public as $data)
          <td>{{ $data->name }}</td>
          <td>{{ $data->email }}</td>
          <td>{{ $data->age }}</td>
          <td>{{ $data->city }}</td>
          <td>{{ $data->address }}</td>
          <td>
            <a href="{{ route('public.create') }}" class="btn btn-primary">Create</a>
            <a href="{{ route('public.show', $data->id) }}" class="btn btn-info">View</a>
            <a href="{{ route('public.edit', $data->id) }}" class="btn btn-warning">Update</a>
            <a href="{{ route('public.delete', $data->id) }}" class="btn btn-danger">Delete</a>
          </td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
</div>

@endsection

