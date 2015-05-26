<?php namespace Acme\Repositories\Product;

interface ProductRepositoryInterface {

	public function getAll();

	public function find( $slug );
}