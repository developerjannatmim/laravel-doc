@extends('public.layout')

@section('content')
<div class="row">
  <div class="col-md-12">
    <h2>Show Public</h2>
    <div class="mb-3">
      <a class="btn btn-primary" href="{{route('public.index')}}">Back</a>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <strong>Name:</strong>
      {{$public->name}}
    </div>
  </div>
  <div class="col-md-12">
    <div class="form-group">
      <strong>Email:</strong>
      {{$public->email}}
    </div>
  </div>
  <div class="col-md-12">
    <div class="form-group">
      <strong>Age:</strong>
      {{$public->age}}
    </div>
  </div>
  <div class="col-md-12">
    <div class="form-group">
      <strong>City:</strong>
      {{$public->city}}
    </div>
  </div>
  <div class="col-md-12">
    <div class="form-group">
      <strong>Address:</strong>
      {{$public->address}}
    </div>
  </div>
</div>
@endsection
