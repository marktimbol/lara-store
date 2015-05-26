<?php namespace Acme\Repositories\Cart;

use App\Cart;
use App\User;

use Auth;

class CartRepository implements CartRepositoryInterface {
	
	protected $user_id;
	protected $product_id;
	protected $quantity;

	public function __construct() {
		$this->user_id = Auth::user()->id;
	}

	public function getAll() {

		$user = User::findOrFail( $this->user_id );
		$results = $user->cart;

		return $results;

	}

	public function store( $data ) {

		$this->product_id = $data['product_id'];
		$this->quantity = $data['quantity'];


		if( $this->inCart( $this->product_id ) ) {

			//update the quantity
			$cart = Cart::where( 'user_id', $this->user_id )
					->where('product_id', $this->product_id )
					->first();

			$cart->quantity = $cart->quantity + $this->quantity;

			$cart->save();

			return $cart;

		} else {

			$cart = User::findOrFail( $this->user_id );
			$cart->attach($this->product_id, ['quantity' => $this->quantity]);

			return $cart;

		}


	}

	public function inCart( $product_id ) {

		$result = Cart::where('user_id', $this->user_id)
					->where('product_id', $product_id )
					->first();
		
		if( $result ) {
			return true;
		} else {
			return false;
		}
	}
}