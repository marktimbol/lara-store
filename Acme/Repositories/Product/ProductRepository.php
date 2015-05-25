<?php namespace Acme\Repositories\Product;

use App\Product;

class ProductRepository implements ProductRepositoryInterface {
	
	public function getAll() {
		return Product::all();
	}

}