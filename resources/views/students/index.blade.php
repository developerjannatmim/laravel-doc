@extends('students.layout')

@section('content')
<h1>All Student data</h1>
<div class="container">
  <div class="row">
    <div class="col-md-12 mt-3">
      <table class="table table-bordered table-striped">
        <div class="mb-3">
          <a class="btn btn-info" href="{{ route('students.create') }}">Create New Student</a>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
          {{ $message }}
        </div>
        @endif
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Age</th>
          <th>City ID</th>
          <th>Image</th>
          <th>Actions</th>
        </tr>
        <tr>
          @foreach($students as $data)
          <td>{{ $data->id }}</td>
          <td>{{ $data->name }}</td>
          <td>{{ $data->email }}</td>
          <td>{{ $data->age }}</td>
          <td>{{ $data->city }}</td>
          <td>
            @if(!empty($data->image))
            <img src="{{ url( 'stu_imgs/'.$data->image ) }}" alt="stu_imgs" style="height: 50px; width: 50px">
            @endif
          </td>
          <td>
            <form action="{{ route('students.destroy',$data->id) }}" method="POST">

              <a class="btn btn-info" href="{{ route('students.show',$data->id) }}">Show</a>

              <a class="btn btn-primary" href="{{ route('students.edit',$data->id) }}">Edit</a>

              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Delete</button>
          </form>
          </td>
        </tr>
        @endforeach
      </table>
      <div>
        {{ $students->links() }}
      </div>
    </div>
  </div>
</div>

@endsection

