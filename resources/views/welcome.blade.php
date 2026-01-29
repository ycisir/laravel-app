<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home page</title>
</head>
<body>
	<h1>Welcome to Laravel</h1>
	{{--<h3>Hey, {{ $name }}</h3>--}}
	@include('dashboard', ['about' => 'Hey there I am learning PHP/Laravel'])
</body>
</html>