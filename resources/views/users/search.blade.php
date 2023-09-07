@extends('users.layout')

@section('content')
<div class="text-center page-title">
<h3>User found: {{$user->name}}</h3>
<br>
<b>Email:</b> {{$user->email}}
<br>
<b>Registration no:</b> {{$user->created_at}}
</div>
@endsection