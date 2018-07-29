<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	</head>
	<body>
		<div class="col-xs-8 col-xs-offset-2" style="margin-top: 50px">
			<form class="form-horizontal form-row-seperated" action="{{ URL::action('StudentController@update')}}" method="POST">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="id" value="{{old('id', $editById['id'])}}">
				<div class="form-group">
					<label>Name</label>
					<input type="text" class="form-control" name="name" value="{{old('name', $editById['name'])}}">
				</div>
				<div class="form-group">
					<label>Age</label>
					<input type="text" class="form-control" name="age" value="{{old('age', $editById['age'])}}">
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
	</body>
</html>