<?php namespace Acme\Repositories\Cart;

interface CartRepositoryInterface {

	public function getAll();
	
	public function store( $data );

	public function inCart( $product_id );
}