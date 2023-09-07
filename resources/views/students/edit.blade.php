@extends('students.layout')

@section('content')
<div class="row">
  <div class="col-md-6">
    <h2>Single Student Date</h2>
    <div class="pull-left">
      <a class="btn btn-primary" href="{{route('students.index')}}">Back</a>
    </div>
  </div>
</div>
<div class="row">
  <div class="clo-md-12">

    @if ($errors->any())
    <div class="alert alert-danger">
      There were some problems with your input.<br><br>
      @foreach ($errors->all() as $error)
        <ul>
          <li>{{$error}}</li>
        </ul>
      @endforeach
    </div>
    @endif

    <form action="{{route('students.update', $student->id)}}" method="POST">
      @csrf
      @method('PUT')

      <div class="form-group">
        <label for="name" class="mb-2 mt-2"><b>Name:</b></label>
        <input class="form-control" type="text" name="name" value="{{$student->name}}" />
      </div>
      <div class="form-group">
        <label for="email" class="mb-2 mt-2"><b>Email:</b></label>
        <input class="form-control" type="text" name="email" value="{{$student->email}}" />
      </div>
      <div class="form-group">
        <label for="age" class="mb-2 mt-2"><b>Age:</b></label>
        <input class="form-control" type="text" name="age" value="{{$student->age}}" />
      </div>
            <div class="form-group">
        <label for="city" class="mb-2 mt-2"><b>City:</b></label>
        <input class="form-control" type="text" name="city" value="{{$student->city}}" />
      </div>
      <div class="mt-3">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
</div>
@endsection
