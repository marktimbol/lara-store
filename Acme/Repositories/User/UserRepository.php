<?php namespace Acme\Repositories\User;

use App\User;

class UserRepository implements UserRepositoryInterface {
	
	public function getAll() {
		return User::all();
	}

	public function find( $id ) {
		return User::findOrFail( $id );
	}
}