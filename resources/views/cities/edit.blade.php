@extends('cities.layout')

@section('content')
<div class="row">
  <div class="col-md-6">
    <h2>City Info</h2>
    <div class="pull-left">
      <a class="btn btn-primary" href="{{route('cities.index')}}">Back</a>
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

    <form action="{{route('cities.update', $city->id)}}" method="POST">
      @csrf
      @method('PUT')

      <div class="form-group">
        <label for="city_name" class="mb-2 mt-2"><b>Name:</b></label>
        <input class="form-control" type="text" name="city_name" value="{{$city->city_name}}" />
      </div>
      <div class="mt-3">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
</div>
@endsection
