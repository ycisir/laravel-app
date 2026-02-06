{{--create layout using template inheritance
the @section directive, as the name implies, defines a section of content
the @yield directive is used to display the content of a give section.
the @yield directive is also accepts a default value as its second parameter
this value will be rendered if the section being yielded is undefined
the @endsection dirctive will only define a section while @show will define and immediately yield the section.
@extends blade directive to specify which layout the child view should inherit--}}
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>{{--@yield recieved data--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    @include('layouts.header')
    @yield('content')
</body>
</html>