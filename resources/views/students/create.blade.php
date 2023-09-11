@extends('students.layout')

@section('content')
<div class="row">
  <div class="col-md-6">
    <h2>Create Student Date</h2>
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

    <form action="{{route('students.store')}}" method="POST" enctype="multipart/form-data">
      @csrf

      <div class="form-group">
        <label for="name" class="mb-2 mt-2"><b>Name:</b></label>
        <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" placeholder="Name" />
      </div>
      <div class="form-group">
        <label for="email" class="mb-2 mt-2"><b>Email:</b></label>
        <input class="form-control @error('email') is-invalid @enderror" type="text" name="email" placeholder="Email" />
      </div>
      <div class="form-group">
        <label for="age" class="mb-2 mt-2"><b>Age:</b></label>
        <input class="form-control @error('age') is-invalid @enderror" type="text" name="age"placeholder="Age" />
      </div>
      <div class="form-group">
        <label for="city" class="mb-2 mt-2"><b>City ID:</b></label>
        <input class="form-control @error('city') is-invalid @enderror" type="text" name="city" placeholder="City ID" />
      </div>
      <div class="form-group">
        <label for="form-label" class="mb-2 mt-2"><b>Image:</b></label>
        <input class="form-control @error('image') is-invalid @enderror" type="file" name="image" placeholder="Image..." />
      </div>
      <div class="mt-3">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
</div>
@endsection
