<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Product - {{$name}}</title>
</head>
<body>
	<h1>Product page</h1>
	<hr>
	{{--child 'laptops' view can also access variable $name--}}
	{{--here if laptops view not available include gives View [laptops] not found--}}
	{{--@include('laptops', ['count' => 5])--}}

	{{--to fix above we have includeif--}}
	{{--@includeIf('laptops', ['count' => 5])--}}

	{{--@includeWhen($userType, 'laptops',['count' => 5])--}}

	{{--@includeUnless($userType, 'laptops',['count' => 5])--}}


	<h3>List of best {{$name}}</h3>

	{{--@foreach($products as $product)
		@includeIf('laptops')
	@endforeach--}}


	{{--same as above loop--}}
	{{--@each('laptops', $products, 'product')--}}

	{{--if array of products is empty then fourth args return view--}}
	@each('laptops', $products, 'product', 'noproducts')
	<p>We have total {{$count}} best laptops available in stock</p>

	@once
		<p>This code will run once per rendering cycle</p>
	@endonce
</body>
</html>