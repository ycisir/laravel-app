@extends('layouts.layout')
@section('title', 'Register')

@section('content')
	<h1>Registeration Form</h1>

	@if($errors->any())
		{{$errors}}
	@endif
	<form method="post" novalidate>
		@csrf
		Name: <input type="text" name="name" value="{{ old('name') }}" /><br /><br />
		Email: <input type="email" name="email" value="{{ old('email') }}" /><br /><br />
		Password: <input type="password" name="password" value="{{ old('password') }}" /><br /><br />
		<button type="submit">Register</button>
	</form>

	@if(isset($data))
		@foreach($data as $item)
			{{ $item }}
		@endforeach
	@endif
@endsection
