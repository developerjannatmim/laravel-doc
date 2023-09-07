@extends('blog.layout')

@section('content')
<div class="row">
  <div class="col-md-12">
    <h2>Show Blog</h2>
    <div class="mb-3">
      <a class="btn btn-primary" href="{{route('blog.index')}}">Back</a>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <strong>Title:</strong>
      {{$blog->title}}
    </div>
  </div>
  <div class="col-md-12">
    <div class="form-group">
      <strong>Text Body:</strong>
      {{$blog->body}}
    </div>
  </div>
</div>
@endsection
