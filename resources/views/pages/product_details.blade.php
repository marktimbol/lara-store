@extends('layouts.master')

@section('pageTitle')
	{{ $product->name }}
@endsection

@section('content')

	
	<div class="row product-details">

		<div class="col-md-7">

			<h1>{{ $product->name }}</h1>
			<p class="text-muted">by (categories)</p>

			<div class="product-thumbnails">

			</div>

			<div class="box">
				<div class="product-image">
					<img src="{{ $product->image }}" alt="{{ $product->name }}" alt="{{ $product->name }}" class="img-rounded" />
				</div>
			</div>

		</div>

		<div class="col-md-5">

			<div class="box">

				<h3 class="product-price">{{ $product->price }}.00 <span class="currency">AED</span>

					@if( $product->isAvailable ) 
						<label class="label label-default float-right">In Stock</label>
					@else
						<label class="label label-danger float-right">Out of Stock</label>
					@endif

				</h3>

				<ul class="list-group">
					<li class="list-group-item">
						<strong>Condition:</strong> New
					</li>

					<li class="list-group-item">
						<strong>Seller Note:</strong> 1 Year Souq Warranty. Water Damage not covered in Warranty
					</li>					
				</ul>

				<ul class="list-group">
					<li class="list-group-item">
						<strong>Color:</strong> Gray
					</li>

					<li class="list-group-item">
						<strong>Storage Capacity:</strong> 32GB
					</li>					
				</ul>				
				
				{!! Form::open(['route' => 'cart.store', 'class' => 'form-horizontal']) !!}
					{!! Form::hidden('product_id', $product->id) !!}
					<div class="form-group">
						{!! Form::label('quantity', null, ['class' => 'col-sm-2 control-label']) !!}
						<div class="col-sm-3">
							{!! Form::text('quantity', 1, ['class' => 'form-control']) !!}
						</div>
					</div>
					
					{!! Form::submit('Add to Cart', ['class' => 'btn btn-success btn-lg btn-block']) !!}
				
				{!! Form::close() !!}	

			</div>
		</div>
		
	</div>

@endsection