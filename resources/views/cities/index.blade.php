@extends('cities.layout')

@section('content')
<h1>All City data</h1>
<div class="container">
  <div class="row">
    <div class="col-md-8 mt-3">
      <table class="table table-bordered table-striped">
        <div class="mb-3">
          <a class="btn btn-info" href="{{ route('cities.create') }}">Create New City</a>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
          {{ $message }}
        </div>
        @endif
        <tr>
          <th>ID</th>
          <th>City Name</th>
          <th>Actions</th>
        </tr>
        <tr>
          @foreach($cities as $data)
          <td>{{ $data->id }}</td>
          <td>{{ $data->city_name }}</td>
          <td>
            <form action="{{ route('cities.destroy',$data->id) }}" method="POST">
              @csrf
              @method('DELETE')
              <a class="btn btn-info" href="{{ route('cities.show',$data->id) }}">Show</a>
              <a class="btn btn-primary" href="{{ route('cities.edit',$data->id) }}">Edit</a>
              <button type="submit" class="btn btn-danger">Delete</button>
          	</form>
          </td>
        </tr>
        @endforeach
      </table>
      <div>
        {{ $cities->links() }}
      </div>
    </div>
  </div>
</div>

@endsection

