@extends('layouts.layout')
@section('title', 'Home')

@section('content')
	<h1>Students list</h1>
	<table border=1>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
		</tr>

		@foreach($students as $student)
			<tr>
				<td>{{ $student->id }}</td>
				<td>{{ $student->name }}</td>
				<td>{{ $student->email }}</td>
			</tr>
		@endforeach
	</table>

	{{-- $students->links() --}}
	{{ $students->links('pagination::bootstrap-5') }}
	{{-- $students->links('pagination::simple-bootstrap-5') --}}
@endsection
