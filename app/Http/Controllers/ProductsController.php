<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Acme\Repositories\Product\ProductRepositoryInterface;

class ProductsController extends Controller {

	protected $product;

	public function __construct( ProductRepositoryInterface $product ) {

		$this->product = $product;
	}


	public function show( $slug ) {
		$product = $this->product->find( $slug );

		return view('pages.product_details', compact('product'));
	}

}
