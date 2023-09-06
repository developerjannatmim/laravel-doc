@extends('students.layout')

@section('content')
<h2>Single Student Date</h2>
<article>
  @foreach($student as $data)
  <p><b>Name: </b> {{$data->name}}</p>
  <p><b>Email: </b> {{$data->email}}</p>
  <p><b>Age: </b> {{$data->age}}</p>
  <p><b>City: </b> {{$data->city}}</p>
  @endforeach
</article>
@endsection
