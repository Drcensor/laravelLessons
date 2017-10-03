<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<ul>
		@ foreach ($users as $user)

	<li>{{$task->firstname}}</li>

	@endforeach

	</ul>
</body>
</html>