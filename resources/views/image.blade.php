<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <title>Laravel 10 Image Upload Application</title>
</head>
<body>
  <div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h1>Laravel 10 Image Upload Application</h1>
        </div>
        <div class="panel-body">
            @if ($message = Session::get('success'))
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <strong> {{ $message }} </strong>
                </div>
                {{-- <img src="images/{{ \Session::get('image') }}" alt="picture"> --}}
                @foreach ( \Session::get('image') as $imgs )
                    <img src="images/{{ $imgs }}" alt="some images">
                @endforeach
            @endif
            <form action="{{route('image.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="form-group mb-3">
                <label for="form-label">Image:</label>
                <input type="file" name="image[]" placeholder="upload your image" class="form-control @error('image') is-invalid @enderror" multiple/>
                @error( 'image.*' )
                    <div class="text-danger">{{ $image }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
            </form>
        </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>