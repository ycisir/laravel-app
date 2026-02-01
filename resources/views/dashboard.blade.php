@extends('layout.admin-layout')
@section('title', 'Dashboard page') {{--@section provide data--}}

{{--override default section--}}
@section('default')
	@parent {{--also get default data--}}
    Navigation for dashboard
@endsection

@section('page-name')
	<h1>Dashboard page</h1>
	<hr>
@endsection

@section('banner', 'Dashboard banner')

@section('main-content')
	<p>Dashboard main content</p>
@endsection
