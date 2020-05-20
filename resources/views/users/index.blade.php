<!DOCTYPE html>
<html>
<head>
	<title>New Laravel Application</title>
</head>
<body>
	<h1>This is User List</h1>
	<h3>Create new user <a href="/user/create">Click</a></h3>
	<table>
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Created</th>
			<th>Action</th>
		<tr>

	<?php
	foreach ($users as $key => $value) { ?>
		<tr>
			<td>{{$value->name}}</td>
			<td>{{$value->email}}</td>
			<td>{{$value->created_at}}</td>
			<td><a href="/user/updateaction">Update</a>&nbsp;&nbsp;&nbsp;<a href="/user/deleteuser">Delete</a></td>
		</tr>
	<?php }
	?>

	</table>


</body>
</html>
