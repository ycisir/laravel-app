<x-layout>
	<x-slot name='title'>About page</x-slot>
	
	<x-slot name='navbar'>
		<x-include.header />
	</x-slot>

	<h1>Contact page</h1>
	<hr>
	{{--displaying data--}}

	{{--<p>Hey contact me at {{ $email }}</p>--}}

	{{--calling function--}}
	<p>Time: {{ date("H:i:s") }}</p>



	{{--if directive 
	@if($name == 'harry')
		Hi, {{ $name }}
	@endif
	--}}


	{{-- if else directive
	@if($name == 'jack')
		Hi, {{ $name }}
	@else
		Hey, Guest
	@endif
	-- }}


	{{--if elseif else directive 
	@if($name == 'jack')
		Hi, {{ $name }}
	@elseif($name == 'harry')
		Hi, {{ $name }}
	@else
		Hey, Guest
	@endif
	--}}



	{{--unless directive
	@unless($name == 'root')
		You're not root user
	@else
		Hey, {{ $name }}
	@endunless
	--}}




	{{--isset directive--}}
	{{--make sure to check empty string too--}}
	{{--prevent error if data not passed from controller like Undefined variable $email--}}
	{{--
	@isset($email)
		Hey contact me at {{ $email }}
	@endisset
	--}}




	{{--empty directive
	@empty($name)
		Hi, Guest
	@endempty
	--}}



	{{--production directive
	@production
		Production code
	@endproduction
	--}}




	{{--env directive
	@env('local')
		Local environment
	@endenv
	--}}



	{{--env directive
	@env(['local', 'staging'])
		Local and staging environment
	@endenv
	--}}


	{{--{{var_dump($users)}}--}}

	{{--switch directive
	@switch($userMode)
		@case($users[0] == $userMode)
			<h1>Hi, {{$users[0]}}</h1>
			Root directory and database access
			@break
		@case($users[1] == $userMode)
			<h1>Hi, {{$users[1]}}</h1>
			Server files and database access
			@break
		@case($users[2] == $userMode)
			<h1>Hi, {{$users[2]}}</h1>
			Limited access for their files
			@break
		@default
			No access you're in {{$users[3]}} mode	
	@endswitch
	--}}
	




	{{--for loop
	@for($i=0; $i < 10; $i++)
		<p>{{$i}}</p>
	@endfor
	--}}



	{{--foreach loop
	@foreach($users as $user)
		@continue(($user == 'guest')
		<p>{{$user}}</p>
	@endforeach
	--}}


	{{--forelse empty loop for continue above is shortcut
	@forelse($users as $user)
		@if($user == 'guest')
			@continue
		@endif
		<p>{{$user}}</p>
	@empty
		<p>No data found!</p>
	@endforelse
	--}}
	


	{{--while loop
	@while(true)
		<p>In while loop</p>
		@break
	@endwhile
	--}}


	{{--break and continue--}}




	{{--loop variable
	@forelse($users as $user)
		@if($loop->first)
			<p>This is first loop</p>
		@endif
		<p>{{$user}}</p>
		@if($loop->last)
			<p>This is last loop</p>
		@endif

		<p>total iteration: {{$loop->count}}</p>
	@empty
		<p>No data found!</p>
	@endforelse
	--}}

</x-layout>