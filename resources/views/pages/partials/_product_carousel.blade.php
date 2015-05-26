<div class="carousel product-carousel">
	@foreach( $products as $product )
		<div class="product">
			<a href="{{ route('product.details', $product->slug) }}">&nbsp;</a>
			<img src="{{ $product->image }}" class="img-rounded" />
			<h3>{{ $product->name }}</h3>
			<p class="text-muted">Short description of the product</p>
			<p class="lead price">{{ $product->price }} <span>AED</span></p>
		</div>	
	@endforeach
</div>

<hr />