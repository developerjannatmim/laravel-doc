@extends('teachers.layout')

@section('content')

<div class="container mt-4">
    @if (session('message'))
        <h4 class="alert alert-success">{{ session('message') }}</h4>
    @endif
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h4>Add Teacher</h4>
            </div>
            <div class="card-body">
                <form action="{{ url('teachers') }}" method="POST">
                    @csrf

                    <div class="row">
                        <h4>Student</h4>
                        <div class="col-md-4 mb-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" />
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" />
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control" />
                        </div>
                    </div>
                    <div class="row">
                        <h4>Teacher Details</h4>
                        <div class="mb-3 col-md-4">
                            <label>Alternate Phone</label>
                            <input type="text" name="alternate_phone" class="form-control" />
                        </div>
                        <div class="mb-3 col-md-4">
                            <label>City</label>
                            <input type="text" name="city" class="form-control" />
                        </div>
                        <div class="mb-3 col-md-4">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control" />
                        </div>
                        <div class="mb-3 col-md-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection