<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	</head>
	<body>
		<div class="col-xs-8 col-xs-offset-2" style="margin-top: 50px">
			<table class="table table-hover">
				<tr>
					<td>ID</td>
					<td>Name</td>
					<td>Age</td>
					<td>Chức năng</td>
				</tr>
				<?php foreach ($allStudents as $std): ?>
					<tr>
						<td><?php echo $std['id']?></td>
						<td><?php echo $std['name']?></td>
						<td><?php echo $std['age']?></td>
						<td>
							<a href="user/create">Create</a>
							<a href="user/<?php echo $std['id']?>/edit">Edit</a>
							<a href="user/<?php echo $std['id']?>/delete">Delete</a>
						</td>
					</tr>
				<?php endforeach ?>			
			</table>
		</div>
	</body>
</html>