<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Acme\Repositories\Cart\CartRepositoryInterface;
use Acme\Repositories\User\UserRepositoryInterface;

use Laracasts\Flash\Flash;


class CartController extends Controller {

	protected $cart;
	protected $user;

	public function __construct( CartRepositoryInterface $cart, UserRepositoryInterface $user ) {

		$this->cart = $cart;
		$this->user = $user;	

	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$products = $this->cart->getAll();

		return view('pages.cart', compact('products'));	
	}

	

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store( Request $request )
	{
		$this->cart->store( $request->all() );

		Flash::message('Product was added to your cart.');

		return redirect()->route('cart.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
