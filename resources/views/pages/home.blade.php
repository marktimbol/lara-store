@extends('layouts.master')

@section('content')

	
	<div class="row">
		<h2>Top Selling Items</h2>
		
		<div class="carousel product-carousel">
			@for( $i = 1; $i<=20; $i++ )
				<div class="product">
					<a href="#">&nbsp;</a>
					<img src="http://placehold.it/300x300" class="img-rounded" />
					<h3>Product Name</h3>
					<p class="text-muted">Short description of the product</p>
					<p class="lead price">299.00 <span>AED</span></p>
				</div>	
			@endfor
		</div>
	</div>

@endsection