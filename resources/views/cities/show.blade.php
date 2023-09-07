@extends('cities.layout')

@section('content')
<div class="row">
  <div class="col-md-12">
    <h2>Show City</h2>
    <div class="mb-3">
      <a class="btn btn-primary" href="{{route('cities.index')}}">Back</a>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <strong>City Name:</strong>
      {{$city->city_name}}
    </div>
  </div>
</div>
@endsection
