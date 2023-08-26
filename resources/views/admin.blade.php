<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<h1>Admin Page</h1>
	<form action="#">
		@csrf
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" name="name" value="{{ old('name') }}">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</form>
	@if(session('status'))
	<div class="alert alert-success">
	{{ session('status') }}
	</div>
	@endif
</body>
</html>