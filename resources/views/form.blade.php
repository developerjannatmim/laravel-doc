<!DOCTYPE html>
<html>
<head>
    <title>Laravel 7 form validation example - ItSolutionStuff.com</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
  
        <h1>Laravel 7 form validation example</h1>

        @if(Session::has('success'))
         {{ Session::get('success') }}
        @endif
   
        <form method="POST" action="{{ url('/form') }}">
  
            @csrf
  
            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name" class="form-control" placeholder="Name" value={{old('name')}}>
                @error('name')
                  {{$message}}
                @enderror
            </div>
   
            <div class="form-group">
                <label>Password:</label>
                <input type="password" name="password" class="form-control" placeholder="Password" value={{old('password')}}>
                @error('password')
                  {{$message}}
                @enderror
            </div>
    
            <div class="form-group">
                <strong>Email:</strong>
                <input type="text" name="email" class="form-control" placeholder="Email" value={{old('email')}}>
                @error('email')
                  {{$message}}
                @enderror
            </div>
   
            <div class="form-group">
                <button class="btn btn-success btn-submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>