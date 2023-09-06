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
        </tr>
        <tr>
          @foreach($students as $data)
          <td>{{ $data->name }}</td>
          <td>{{ $data->email }}</td>
          <td>{{ $data->age }}</td>
          <td>{{ $data->city }}</td>
          <td>
            <a href="{{ route('students.show', $data->id) }}" class="btn btn-primary">View</a>
            <a href="{{ route('students.edit', $data->id) }}" class="btn btn-primary">Update</a>
          </td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
</div>

@endsection

