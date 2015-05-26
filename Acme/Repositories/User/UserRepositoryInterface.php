<?php namespace Acme\Repositories\User;

interface UserRepositoryInterface {

	public function getAll();

	public function find( $id );
}