@extends('students.layout')

@section('content')
@if(session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
@endif

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1>Create New Public</h1>
      <form action="{{ route('public.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" placeholder="name" class="form-control" />
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" name="email" placeholder="email" class="form-control" />
        </div>
        <div class="form-group">
          <label for="age">Age</label>
          <input type="text" name="age" placeholder="age" class="form-control" />
        </div>
        <div class="form-group">
          <label for="city">City</label>
          <input type="text" name="city" placeholder="city" class="form-control" />
        </div>
        <div class="form-group">
          <label for="address">Address</label>
          <input type="text" name="address" placeholder="address" class="form-control" />
        </div>
        <button class="btn btn-primary" type="submit">Add Public</button>
      </form>
    </div>
  </div>
</div>
@endsection