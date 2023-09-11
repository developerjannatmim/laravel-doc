@extends('students.layout')

@section('content')
<div class="row">
  <div class="col-md-12">
    <h2>Show Student</h2>
    <div class="mb-3">
      <a class="btn btn-primary" href="{{route('students.index')}}">Back</a>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <strong>Name:</strong>
      {{$student->name}}
    </div>
  </div>
  <div class="col-md-12">
    <div class="form-group">
      <strong>Email:</strong>
      {{$student->email}}
    </div>
  </div>
  <div class="col-md-12">
    <div class="form-group">
      <strong>Age:</strong>
      {{$student->age}}
    </div>
  </div>
  <div class="col-md-12">
    <div class="form-group">
      <strong>City:</strong>
      {{$student->city}}
    </div>
  </div>
  <div class="col-md-12">
    <div class="form-group">
      <strong>Image:</strong>
      <img src="{{ url('stu_imgs/'.$student->image) }}" alt="" style="height: 50px; width: 50px">
    </div>
  </div>
</div>
@endsection
