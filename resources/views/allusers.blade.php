<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
    {{-- <style>
      nav .w-5{
        display: none;
      }
    </style> --}}
  </head>
  <body>
    <div class="container">
      @if (session('message'))
      <div class="alert alert-success">{{session('message')}}</div>
      @endif
      @if (session('error'))
      <div class="alert alert-danger">{{session('error')}}</div>
      @endif
        <div class="row text-center">
            <div class="col-md-12">

                <h1>All Users Data</h1>
                <table class="table table-bodered table-striped ml-3">
                    <tr class="">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>City</th>
                        <th>View</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </tr>
                    @foreach ($data as $user)
                    <tr class="">
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->age }}</td>
                        <td>{{ $user->city }}</td>
                        <td>
                          <a href="{{ route('view.singleuser', $user->id) }}" class="btn btn-primary">View</a>
                        </td>
                        <td>
                          <a href="{{ route('view.deleteuser', $user->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                        <td>
                          <a href="#" class="btn btn-warning">Update</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
                <div>
                  {{ $data->links() }}
                </div>
                {{-- <div>
                  total data: {{$data->total() }} <br>
                  Current Page: {{$data->currentPage() }}
                </div> --}}
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>


















