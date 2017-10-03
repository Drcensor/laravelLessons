<!DOCTYPE html>
<html>
<head>
	<title>Results</title>
</head>
<body>

	<ul>
		@ foreach ($users as $user)

		<li>
			{{$user->firstname}}

		</li>

	@endforeach

	</ul>

</body>
</html>