<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home page</title>
	<style>
		.my-class {
			color: red;
		}
	</style>
</head>
<body>
	<x-include.header />
	<h1>Welcome to Laravel</h1>
	{{--<h3>Hey, {{ $name }}</h3>--}}
	@include('dashboard', ['about' => 'Hey there I am learning PHP/Laravel'])

	{{--@php
		$msg = "I had write Plain PHP in blade template";
		echo $msg;
	@endphp--}}
	{{--echo "Without php tag in blade we can't write Plain PHP code" . PHP_EOL;--}}

	<hr>



	{{--components--}}
	<x-card name='Harry Potter' department='Wizardry' roll-no=7 class='my-class' />
	<x-card name='Ron Weasely' department='Wizardry' roll-no=18 />
	<x-card name='Hermoine Granger' department='Wizardry' rollNo=3 />
	<x-card :name=$name department='Pirate' roll-no=47 />
	
</body>
</html>