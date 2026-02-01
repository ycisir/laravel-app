@extends('layout.admin-layout')
@section('title', 'Admin profile page')

{{--override default section--}}
@section('default')
    @extends('components/include/header')
@endsection

@section('page-name')
	<h1>Profile page</h1>
	<hr>
@endsection

@section('banner', 'Profile banner')

@section('main-content')
	<h1>Welcom, {{$name}}</h1>
@endsection
