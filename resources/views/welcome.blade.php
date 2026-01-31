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

	{{--slot and named slot--}}
	<x-alert>
		<x-slot name='title'>Alert Title</x-slot>
		<span>Hey this is alert!</span>
	</x-alert>

	{{--anonymous components--}}
	<x-banner title='Laptop 15% OFF' desc='From this weekend to next weekend sale is live now' />
	<x-banner title='Mobile 23% OFF' desc='Exclusive offer on top brands mobile phones' />

	{{--components--}}
	<x-card name='Harry Potter' department='Wizardry' roll-no=7 class='my-class' />
	<x-card name='Ron Weasely' department='Wizardry' roll-no=18 />
	<x-card name='Hermoine Granger' department='Wizardry' rollNo=3 />
	<x-card :name=$name department='Pirate' roll-no=47 />
	
</body>
</html>