@extends('layouts.master')

@section('pageTitle')
	Shopping Cart
@endsection

@section('content')

	
	<div class="row product-details">

		<div class="col-md-7">

			<h1>Shopping Cart</h1>

			
			@forelse( $products as $product )
			
				<div class="box">
					
					<div class="col-md-3">
						<img src="{{ $product->image }}" alt="{{ $product->name }}" title="{{ $product->name }}" />
					</div>

					<div class="col-md-6">
						<h4>{{ $product->name }}</h4>
						<p class="price">
							{{ $product->price }} <span class="currency">AED</span>
						</p>
					</div>

					<div class="col-md-3">

					</div>

				</div>

				<div class="clearfix"></div>

			@empty

			@endforelse

		</div>

		<div class="col-md-5">

			<div class="box">


{{-- 				{!! Form::open(['route' => 'cart.store', 'class' => 'form-horizontal']) !!}
					{!! Form::hidden('product_id', $product->id) !!}
					<div class="form-group">
						{!! Form::label('quantity', null, ['class' => 'col-sm-2 control-label']) !!}
						<div class="col-sm-3">
							{!! Form::text('quantity', 1, ['class' => 'form-control']) !!}
						</div>
					</div>
					
					{!! Form::submit('Add to Cart', ['class' => 'btn btn-success btn-lg btn-block']) !!}
				
				{!! Form::close() !!}	 --}}

			</div>
		</div>
		
	</div>

@endsection