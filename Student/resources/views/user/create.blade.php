<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	</head>
	<body>
		<div class="col-xs-8 col-xs-offset-2">
			<form class="form-horizontal form-row-seperated" action="{{ URL::action('StudentController@store')}}" method="POST">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-group">
					<label for="exampleInputEmail">Name</label>
					<input type="text" name="name" class="form-control">
				</div>
				<div>
					<label for="Age">Age</label>
					<input type="number" name="age" class="form-control">
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
	</body>
</html>