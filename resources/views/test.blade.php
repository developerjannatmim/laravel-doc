<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($tests as $data)
    <ul>
        <li><span>id: {{$data->id}}</span><br>
            <span>name: {{$data->name}}</span><br>
            <span>email: {{$data->email}}</span><br>
            <span>city: {{$data->city}}</span><br>
            <span>marks: {{$data->marks}}</span></li>
    </ul>
    @endforeach

    {{-- <span>id: {{$tests->id}}</span><br>
    <span>name: {{$tests->name}}</span><br>
    <span>email: {{$tests->email}}</span><br>
    <span>city: {{$tests->city}}</span><br>
    <span>marks: {{$tests->marks}}</span> --}}

</body>
</html>