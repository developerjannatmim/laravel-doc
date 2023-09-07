@extends('blog.layout')

@section('content')
<div class="row">
  <div class="col-md-6">
    <h2>Create Blog</h2>
    <div class="pull-left">
      <a class="btn btn-primary" href="{{route('blog.index')}}">Back</a>
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

    <form action="{{route('blog.store', $public)}}" method="POST">
      @csrf

      <div class="form-group">
        <label for="title" class="mb-2 mt-2"><b>Title:</b></label>
        <input class="form-control" type="text" name="title" placeholder="Title" />
      </div>
      <div class="form-group">
        <label for="body" class="mb-2 mt-2"><b>Text Body:</b></label>
        <textarea class="form-control" type="text" name="body" placeholder="Text Body" ></textarea>
      </div>
      <div class="mt-3">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
</div>
@endsection
