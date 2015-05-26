<?php

Auth::loginUsingId(1);

get('/', [
	'as' => 'home',
	'uses' => 'PagesController@home'
	]);

resource('cart', 'CartController', [
		'only' => ['index', 'store', 'update','destroy']
		]);

get('/{slug}', [
	'as' => 'product.details',
	'uses' => 'ProductsController@show'
	]);


// use App\User;
// use App\Product;

// get('/', function() {

// 	$user = User::find(1);

// 	return $user->cart;
	
// 	//$user->cart()->attach(3, ['quantity' => 1]);

// 	return 'done';

// });