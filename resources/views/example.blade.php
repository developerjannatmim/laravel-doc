<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Example Page</title>
</head>
<body>
  <h1>this is : {{ $name['a'] }}</h1>
  <h1>this is : {{ $name['b'] }}</h1>
  <h1>this is : {{ $name['c'] }}</h1>

  
        {{-- Testing URL start--}}
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ URL::temporarySignedRoute('secret', now()->addSeconds(3)) }}">Secret</a>
     
        <div>
            Home page
        </div>
    
        <div>
            {{-- {{ route('about.slug', ['slug' => 'apple', 'red' => 'ball', 'black' => 'cat']) }} --}}
            {{-- {{ route('about', ['red', 'black']) }} --}}
            {{-- {{ URL::current() }} --}}
            {{-- {{route('post.comment',['post' =>'red', 'comment' => 'ball'])}} --}}
        </div>
       {{-- Testing URL end--}}

</body>
</html>