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
					<div classs="form-group">
						<form method="GET">
							<div class="input-group mb-3">
								<input
									type="text"
									name="search"
									value="{{ request()->get('search') }}"
									class="form-control"
									placeholder="Search..."
									aria-label="Search"
									aria-describedby="button-addon2">
								<button class="btn btn-success" type="submit" id="button-addon2">Search</button>
								{{--<a class="btn btn-success" href="{{ route('users.show') }}">Search</a>--}}
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
            <th width="280px">Action</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
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