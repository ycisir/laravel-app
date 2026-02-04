@extends('layouts.layout')
@section('title', 'Register')

@section('content')
	<h1>Registeration Form</h1>

	{{--@if($errors->any())
		<ul>
			@foreach($errors->all() as $message)
				<li>{{ $message }}</li>
			@endforeach
		</ul>
	@endif--}}

	<form method="post" novalidate>
		@csrf
		<div>
			Name: <input type="text" name="name" value="{{ old('name') }}" />
			{{--@if($errors->any())
				{{ $errors->first('password') }}
				@foreach($errors->get('name') as $message)
					<span>{{ $message }}</span>
				@endforeach
			@endif--}}
			
			@error('name')
				<span>{{ $message }}</span>
			@enderror

		</div>

		<div>
			Email: <input type="email" name="email" value="{{ old('email') }}" />
			@error('email')
				<span>{{ $message }}</span>
			@enderror
		</div>

		<div>
			Password: <input type="password" name="password" value="{{ old('password') }}" />
			@error('password')
				<span>{{ $message }}</span>
			@enderror
		</div>

		<button type="submit">Register</button>
	</form>

	@if(isset($data))
		@foreach($data as $item)
			<p>{{ $item }}</p>
		@endforeach
	@endif
@endsection
