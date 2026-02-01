<x-layout>
	<x-slot name='title'>About page</x-slot>
	<x-slot name='navbar'>
		<x-include.header />
	</x-slot>
	<h1>Product page</h1>
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
</x-layout>