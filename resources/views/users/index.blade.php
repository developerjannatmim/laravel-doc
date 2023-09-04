@extends('users.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-3">
        <div class="pull-left">
            <h2>Laravel 10 CRUD Example</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('users.create') }}">Create New User</a>
        </div>
				<div class="container mt-5">
                    <h3>Search User By ID</h3>
                    @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif
					<div classs="form-group">
						<form action="{{ route('users.search') }}" method="POST">
                            @csrf
							<div class="input-group mb-3">
								<input
									type="text"
                                    id="id"
									name="id"
									value="{{ old('id') }}"
									class="form-control"
									placeholder="User ID"
									aria-label="Search"
									>
								<button class="btn btn-info" type="submit">Search</button>
							</div>
					</form>
					</div>
			</div>
    </div>
</div>
    @if($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>City</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->age }}</td>
            <td>{{ $user->city }}</td>
            <td>
                <form action="{{ route('users.destroy',$user->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $users->links() !!}

@endsection