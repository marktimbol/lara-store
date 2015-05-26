<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Acme\Repositories\Product\ProductRepositoryInterface;

class PagesController extends Controller {

	protected $product;

	public function __construct( ProductRepositoryInterface $product ) {

		$this->product = $product;

	}

	public function home() {

		$products = $this->product->getAll();

	
		return view('pages.home', compact('products'));
	}

}
